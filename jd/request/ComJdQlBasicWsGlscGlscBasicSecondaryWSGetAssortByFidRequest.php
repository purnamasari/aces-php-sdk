<?php
 namespace Purnamasari\JdClient\Request;

class ComJdQlBasicWsGlscGlscBasicSecondaryWSGetAssortByFidRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.com.jd.ql.basic.ws.glsc.GlscBasicSecondaryWS.getAssortByFid";
	}
	
	public function getApiParas(){
	    if(empty($this->apiParas)){
            return "{}";
        }
        return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

    private  $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
                                                        		                                    	                   			private $assFid;
    	                        
	public function setAssFid($assFid){
		$this->assFid = $assFid;
         $this->apiParas["assFid"] = $assFid;
	}

	public function getAssFid(){
	  return $this->assFid;
	}

                            }





        
 

