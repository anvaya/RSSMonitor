<?php

require_once dirname(__FILE__).'/../lib/scan_songGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/scan_songGeneratorHelper.class.php';

/**
 * scan_song actions.
 *
 * @package    RSSMonitor
 * @subpackage scan_song
 * @author     Anvaya Technologies
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class scan_songActions extends autoScan_songActions
{
     public function executeAjaxAutoComplete(sfWebRequest $request) 
     {
        $col = $request->getParameter('col');
        $match = $request->getParameter('q', "");
        $limit = $request->getParameter('limit', 20);

        //Clean the col parameter to protect against sql injection attack        
        $col = preg_replace("[^a-z_A-Z]", '', $col);

        $list = Doctrine::getTable('scan_song')->getListForAjax($col, $match, $limit);
        $this->renderText(json_encode($list));
        return sfView::NONE;
    }
    
    public function executeDeleteFile(sfWebRequest $request)
    {
        $scan_song = $this->getRoute()->getObject();
        /* @var $scan_song scan_song */
        if($scan_song->getAudioFile())
        {
            try
            {
                $scan_song->setAudioFile(null);
                $scan_song->save();

                $file = sfConfig::get('sf_data_dir')."/audio/".$scan_song->getAudioFile();

                if(file_exists($file))
                {
                    @unlink($file);
                }
                $this->getUser()->setFlash('notice','File Removed Successfully');
            }catch(Exception $ex)
            {
                $this->getUser()->setFlash('error','Error: '.$ex->getMessage());
            }
        }
        else
        {
            $this->getUser()->setFlash('error','No File Assigned to this record.');
        }
        $this->redirect('@scan_song');
    }
    
    public function executeAdd2System(sfWebRequest $request)
    {
        $scan_song = $this->getRoute()->getObject();
        /* @var $scan_song scan_song */
        if(!$scan_song->getTrackId() && $scan_song->getAudioFile())
        {
            $file     = $file = sfConfig::get('sf_data_dir')."/audio/".$scan_song->getAudioFile();
            if(file_exists($file))
            {
                $cmd_name = sfConfig::get('sf_app_add2SystemPath');
                $cmd =  $cmd_name ." \"$file\"";
                $handle = popen($cmd,"r");
                $result = fread($handle, 2096);
                pclose($handle);
                
                if($result)
                {
                    $scan_song->setTrackId($result);
                    $scan_song->setAddedToSystem(true);
                    $scan_song->save();
                    $this->getUser()->setFlash('notice','Added to system successfully');
                }
                else
                {
                    $this->getUser()->setFlash('error','Add to system failed: '.$result);
                }                
            }
            else
            {
                $this->getUser()->setFlash('error','Error: Audio file not available.');
            }           
        }
        else
        {
            $this->getUser()->setFlash('error','This record is already added to the system or audio file not available.');
        }
        
        $this->redirect("@scan_song");
    }
}
