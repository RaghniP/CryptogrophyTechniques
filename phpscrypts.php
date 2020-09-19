
<?php
// functions on encryption and decryption

// ceser encript
function c_encrypt($str, $offset) {
    $encrypted_text = "";
    $offset = $offset % 26;
    if($offset < 0) {
        $offset += 26;
    }
    $i = 0;
    while($i < strlen($str)) {
        $c = strtoupper($str{$i}); 
        if(($c >= "A") && ($c <= 'Z')) {
            if((ord($c) + $offset) > ord("Z")) {
                $encrypted_text .= chr(ord($c) + $offset - 26);
        } else {
            $encrypted_text .= chr(ord($c) + $offset);
        }
      } else {
          $encrypted_text .= " ";
      }
      $i++;
    }
    return $encrypted_text;
}

// ceser decript
function c_decrypt($str, $offset) {
    $decrypted_text = "";
    $offset = $offset % 26;
    if($offset < 0) {
        $offset += 26;
    }
    $i = 0;
    while($i < strlen($str)) {
        $c = strtoupper($str{$i}); 
        if(($c >= "A") && ($c <= 'Z')) {
            if((ord($c) - $offset) < ord("A")) {
                $decrypted_text .= chr(ord($c) - $offset + 26);
        } else {
            $decrypted_text .= chr(ord($c) - $offset);
        }
      } else {
          $decrypted_text .= " ";
      }
      $i++;
    }
    return $decrypted_text;
}


// vigenary encryption


class Vig
{   
    private $uAlphabet;    		// English Alphabet (UPPERCASE)
    private $lAlphabet;    		// English Alphabet (lowercase)

	function __construct()
	{
			$this->uAlphabet = range('A', 'Z');
			$this->lAlphabet = range('a', 'z');
	}

    public  function EncryptOrEncrypt ($message, $secretMsg)
    {
            $secretMsg = strtolower($secretMsg);		
            $type="ENCRYPT";
			if ($type == 'DECRYPT') { 
				$string = '';

				for ($i = 0; $i < strlen($secretMsg); $i++) { 
					$string .= $this->lAlphabet[(26 - array_search($secretMsg[$i],$this->lAlphabet)) % 26];
				}

				$secretMsg = $string;
			}

			$outputMsg = ''; // final decrypted or encrypted message
			$counter = 0;
		

			for ($i = 0; $i < strlen($message); $i++) { 

				if (array_search($message[$i], $this->uAlphabet) !== false) 
				{ // if this character is uppercase character
					$outputMsg .= $this->uAlphabet[(array_search($secretMsg[$counter], $this->lAlphabet) + array_search($message[$i], $this->uAlphabet)) % 26]; 
				}
				elseif (array_search($message[$i], $this->lAlphabet) !== false)
				{ // if this character is lowercase character
					$outputMsg .= $this->lAlphabet[(array_search($secretMsg[$counter], $this->lAlphabet) + array_search($message[$i], $this->lAlphabet)) % 26];
				
				} else 
				{ // if this character is not an english alphabet characters
					$outputMsg.= $message[$i]; continue;
				}

				if ($counter == strlen($secretMsg) - 1) $counter = 0;
				else $counter++;
			}
			echo "Cipher text: " .$outputMsg;
    }

}	

// vigenary decryption


class Vige
{   
    private $uAlphabet;    		// English Alphabet (UPPERCASE)
    private $lAlphabet;    		// English Alphabet (lowercase)

	function __construct()
	{
			$this->uAlphabet = range('A', 'Z');
			$this->lAlphabet = range('a', 'z');
	}

    public  function EncryptOrDecrypt ($message, $secretMsg)
    {
            $secretMsg = strtolower($secretMsg);		
            $type="DECRYPT";
			if ($type == 'DECRYPT') { 
				$string = '';

				for ($i = 0; $i < strlen($secretMsg); $i++) { 
					$string .= $this->lAlphabet[(26 - array_search($secretMsg[$i],$this->lAlphabet)) % 26];
				}

				$secretMsg = $string;
			}

			$outputMsg = ''; // final decrypted or encrypted message
			$counter = 0;
		

			for ($i = 0; $i < strlen($message); $i++) { 

				if (array_search($message[$i], $this->uAlphabet) !== false) 
				{ // if this character is uppercase character
					$outputMsg .= $this->uAlphabet[(array_search($secretMsg[$counter], $this->lAlphabet) + array_search($message[$i], $this->uAlphabet)) % 26]; 
				}
				elseif (array_search($message[$i], $this->lAlphabet) !== false)
				{ // if this character is lowercase character
					$outputMsg .= $this->lAlphabet[(array_search($secretMsg[$counter], $this->lAlphabet) + array_search($message[$i], $this->lAlphabet)) % 26];
				
				} else 
				{ // if this character is not an english alphabet characters
					$outputMsg.= $message[$i]; continue;
				}

				if ($counter == strlen($secretMsg) - 1) $counter = 0;
				else $counter++;
			}
			echo "Plain text: " .$outputMsg;
    }

}	







// otp
function o_encrypt($text,$key){
	$text=str_split($text);
	$key=str_split($key);
	$etxt='';
	if(count($text)==count($key)){
		for ($i=0; $i<count($text) ; $i++) { 
			$en=((ord($text[$i])%65)+(ord($key[$i])%65))%26;
			// echo $en .' ';
			$etxt.= chr($en+65);
		}
	}
	else $etxt='1';
	echo "cipher text:";
	return $etxt;
}

function o_decrypt($text,$key){
	$text=str_split($text);
	$key=str_split($key);
	$dtxt='';
	if(count($text)==count($key)){
		for ($i=0; $i<count($text) ; $i++) { 
			$en=((ord($text[$i])%65)-(ord($key[$i])%65))+26;
			// echo $en%26 .' ';
			$dtxt.= chr(($en%26)+65);
		}
	}
	else $dtxt='1';
	echo "plain text:";
	return $dtxt;
}



  //hill cipher

  if(isset($_POST['h_encryption']))
  {
    $message=$_POST['message'];
    for($i = 0; $i < 3; $i++)
    {
      $mes[$i][0] = ord($message[$i]) - 97;
    }
    
    $a=$_POST['key'];
    // echo json_encode($a);
          $b=$a;
        $c=$a;
       $h=new Hill() ;
      $h->encryption($mes,$a,$b);
  }
  Class Hill
  {
      function encryption($mes,$a,$b) 
      {
          $encrypt=array(array(0),
                         array(0),
                         array(0));
        for($i = 0; $i < 3; $i++)
          {
          for($j = 0; $j < 1; $j++)
              {
            for($k = 0; $k < 3; $k++)
                  {
              $encrypt[$i][$j] = $encrypt[$i][$j] + $a[$i][$k] * $mes[$k][$j];
            }
          }
        }
        // echo "Cipher text:";
        $k='Cipher text: ';
        for($i = 0; $i < 3; $i++)
        {
          $res=chr(fmod($encrypt[$i][0], 26) + 97);
          $k.= $res;
          }
          echo $k;
      }
      
  }
  
if(isset($_POST['h_decryption']))
{
	$message=$_POST['message'];
	for($i = 0; $i < 3; $i++)
	{
		$mes[$i][0] = ord($message[$i]) - 97;
        
	}
	
   $a=$_POST['key'];

        $b=$a;
    	$c=$a;
   	$h=new Hill1() ;
    $h->decryption($c,$b,$mes);
}
Class Hill1
{
    function decryption($c,$b,$mes) 
    {
        $h=new Hill1() ;
        $b=($h->inverseMatrix($c,$b));
        $decrypt=array(array(0,0,0),
                       array(0,0,0),
                       array(0,0,0));
        for($i = 0; $i < 3; $i++)
	    {
		    for($j = 0; $j <3; $j++)
		    {
			      $b[$i][$j]=fmod($b[$i][$j],26);
                  //echo $b[$i][$j];
            }
        }
	    for($i = 0; $i < 3; $i++)
	    {
		    for($j = 0; $j < 1; $j++)
		    {
			    for($k = 0; $k < 3; $k++)
			    {
                    $decrypt[$i][$j] = $decrypt[$i][$j] + ($b[$i][$k] *($mes[$k][$j])) ;
			    }
		    }
	    }
	    echo "Plain text:";
	    for($i = 0; $i < 3; $i++)
	    {
		    $result=chr(fmod(($decrypt[$i][0]), 26)+97);
		    echo $result;
	    }
	    echo "\n";
    }
    function inverse($b)
	{
		 $inv;
	 	$q; 
	 	$r;
		$r1 = 26; 
		 $r2 = $b; 
		 $t;
		 $t1 = 0; 
		 $t2 = 1;

		while ($r2 > 0) {
			$q = $r1 / $r2;
			$r = $r1 - $q * $r2;
			$r1 = $r2;
			$r2 = $r;
			$t = $t1 - $q * $t2;
			$t1 = $t2;
			$t2 = $t;
		}

		if ($r1 == 1) {
			$inv = $t1;
        	if ($inv < 0)
        	{
				$inv+26;
        	}
			return $inv;
		}

		return -1;
	}

	function  inverseMatrix( $key,  $inv)
	{
		 $C=array(
		 		array(),
			 	array(),
		 		array()
			     ); // matrix for cofactors of matrix key[][]
	 //$A[3][3]; // matrix for adjoint of matrix C[][]
	 	$A= array(
				 array(),
				 array(),
				 array()
			     );
		$inv=array(
				array(),
				array(),
				array()
		        );
	

		$C[0][0] = $key[1][1] * $key[2][2] - $key[2][1] * $key[1][2];
		$C[0][1] = -($key[1][0] * $key[2][2] - $key[2][0] * $key[1][2]);
		$C[0][2] = $key[1][0] * $key[2][1] - $key[1][1] * $key[2][0];
		$C[1][0] = -($key[0][1] * $key[2][2] - $key[2][1] * $key[0][2]);
		$C[1][1] = $key[0][0] * $key[2][2] - $key[2][0] * $key[0][2];
		$C[1][2] = -($key[0][0] * $key[2][1] - $key[2][0] * $key[0][1]);
		$C[2][0] = $key[0][1] * $key[1][2] - $key[0][2] * $key[1][1];
		$C[2][1] = -($key[0][0] * $key[1][2] - $key[1][0] * $key[0][2]);
		$C[2][2] = $key[0][0] * $key[1][1] - $key[1][0] * $key[0][1];

		for ( $i = 0; $i < 3; $i++) {
			for ( $j = 0; $j < 3; $j++) {
				$A[$i][$j] = $C[$j][$i];
			}
		}

	 	$det = $key[0][0] * $C[0][0] + $key[0][1] * $C[0][1] + $key[0][2] * $C[0][2];

		if ($det == 0 || $det % 2 == 0 || $det % 13 == 0) {
			echo "The text cannot be encrypted. Take valid key.\n Key should be inversable\n";
			//<li><a href="4.php">Back</a></li>
			exit(1);
		}
		$a = new Hill1();
		$invs = ($a->inverse($det));

		for ( $i = 0; $i < 3; $i++) {
			for ( $j = 0; $j < 3; $j++) {
				$inv[$i][$j] = $A[$i][$j] * $invs;
			}
		}

		//echo "\nInverse of a Key-\n\n";
		for ( $i = 0; $i < 3; $i++) {
			for ( $j = 0; $j < 3; $j++) {
				if ($inv[$i][$j] >= 0) {
					$inv[$i][$j] = $inv[$i][$j] % 26;
					//printf("%3d", inv[i][j]);
					//echo $inv[$i][$j];
				}
				else {
					for ( $x = 0;; $x++) {
						if ($x * 26 + $inv[$i][$j] > 0) {
							$inv[$i][$j] = $x * 26 + $inv[$i][$j];
							break;
						}
					}
					//printf("%3d", inv[i][j]);
					//echo $inv[$i][$j];
				}
			}
			echo "\n";
		}
		return $inv;
	}

    
}












// function calls on request

if(isset($_POST['c_encrypt'])){

    $plain=$_POST['c_pt'];
    $key=$_POST['c_key'];
    echo "Cipher text: ",c_encrypt($plain,$key);
}

if(isset($_POST['c_decrypt'])){
    $cipher=$_POST['c_pt'];
    $key=$_POST['c_key'];
    echo "Plain text: ",c_decrypt($cipher,$key);
}

if(isset($_POST['v_encrypt'])){
    $plain=$_POST['v_pt'];
    $key=$_POST['v_key'];
    $v=new Vig();
    $v->EncryptOrEncrypt($plain,$key);
}

if(isset($_POST['v_decrypt'])){
    $cipher=$_POST['v_pt'];
    $key=$_POST['v_key'];
    $v=new Vige();
    $v->EncryptOrDecrypt($cipher,$key);
}

if(isset($_POST['o_encrypt'])){
    $plain=$_POST['o_pt'];
    $key=$_POST['o_key'];
    echo o_encrypt($plain,$key);

}

if(isset($_POST['o_decrypt'])){
    $cipher=$_POST['o_pt'];
    $key=$_POST['o_key'];
    echo o_decrypt($cipher,$key);
    
}




?>