<?php
session_start();
$username=$_SESSION["username"];
//echo $username;
if($username==null or $username=="")
{
	echo $username;
	//header('location:index.php');
	
}
else
{
	include "common_db_code.php";
	code();
	function parseWord($userDoc) 
{
    $fileHandle = fopen($userDoc, "r");
    $word_text = @fread($fileHandle, filesize($userDoc));
    $line = "";
    $tam = filesize($userDoc);
    $nulos = 0;
    $caracteres = 0;
    for($i=1536; $i<$tam; $i++)
    {
        $line .= $word_text[$i];

        if( $word_text[$i] == 0)
        {
            $nulos++;
        }
        else
        {
            $nulos=0;
            $caracteres++;
        }

        if( $nulos>1996)
        {   
            break;  
        }
    }

    //echo $caracteres;

    $lines = explode(chr(0x0D),$line);
    //$outtext = "<pre>";

    $outtext = "";
    foreach($lines as $thisline)
    {
        $tam = strlen($thisline);
        if( !$tam )
        {
            continue;
        }

        $new_line = ""; 
        for($i=0; $i<$tam; $i++)
        {
            $onechar = $thisline[$i];
            if( $onechar > chr(240) )
            {
                continue;
            }

            if( $onechar >= chr(0x20) )
            {
                $caracteres++;
                $new_line .= $onechar;
            }

            if( $onechar == chr(0x14) )
            {
                $new_line .= "</a>";
            }

            if( $onechar == chr(0x07) )
            {
                $new_line .= "\t";
                if( isset($thisline[$i+1]) )
                {
                    if( $thisline[$i+1] == chr(0x07) )
                    {
                        $new_line .= "\n";
                    }
                }
            }
        }
        //troca por hiperlink
		echo "-------------------------------------------------------------------------------";
		echo $new_line;
		echo "-------------------------------------------------------------------------------";
        $new_line = str_replace("HYPERLINK" ,"<a href=",$new_line); 
		echo "-------------------------------------------------------------------------------";
		echo $new_line;
		echo "-------------------------------------------------------------------------------";
		$new_line.="/>";
        $new_line = str_replace("\o" ,">",$new_line); 
        $new_line .= "\n";

        //link de imagens
        $new_line = str_replace("INCLUDEPICTURE" ,"<br><img src=",$new_line); 
        $new_line = str_replace("\*" ,"><br>",$new_line); 
        $new_line = str_replace("MERGEFORMATINET" ,"",$new_line); 


        $outtext .= nl2br($new_line);
    }

 return $outtext;
} 
	function parseWord1($userDoc) 
{
	echo "parse word function called withi parameter".$userDoc;
    $fileHandle = fopen($userDoc, "r");
    $line = @fread($fileHandle, filesize($userDoc));   
    $lines = explode(chr(0x0D),$line);
    $outtext = "";
    foreach($lines as $thisline)
      {
        $pos = strpos($thisline, chr(0x00));
        if (($pos !== FALSE)||(strlen($thisline)==0))
          {
          } else {
            $outtext .= $thisline." ";
          }
      }
     $outtext = preg_replace("/[^a-zA-Z0-9\s\,\.\-\n\r\t@\/\_\(\)]/","",$outtext);
    return $outtext;
} 

	// current directory
	echo getcwd() . "<br/>";
	$basedirectory=getcwd();
	$filename="";
	if(isset($_REQUEST['filename']))
	{
		$filename=$_REQUEST['filename'];
		echo $filename;
		$content = exec($basedirectory.'\antiword.exe '.$filename);
		system($basedirectory.'\antiword\antiword.exe ');
		echo "<br/>conetent".$content;
		echo $basedirectory."parameters".'antiword'.$filename;
		parseWord($filename);
	}
	



/*****************************************************************
This approach uses detection of NUL (chr(00)) and end line (chr(13))
to decide where the text is:
- divide the file contents up by chr(13)
- reject any slices containing a NUL
- stitch the rest together again
- clean up with a regular expression
*****************************************************************/


//$userDoc = "cv.doc";

$text = parseWord($filename);
echo $text;




}
?>