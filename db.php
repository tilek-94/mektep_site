<?

$connection=mysqli_connect('localhost','root','','admin_omk') or die('ne udalost');

$result=mysqli_set_charset($connection,'utf8');

class Dispay{


public $connection;
public $kodirovka;
function __construct($conekt,$kodir) {
    $this->connection = $conekt;
    $this->kodirovka = $kodir;

  }

	public function DisplayFoto($text,$index){
		$query = "SELECT * FROM $text ORDER BY id DESC";
		$res1 = mysqli_query($this->connection,$query);
		$row =mysqli_fetch_array($res1);
		return $row[$index];
	}

function cut_paragraph($string)
{
$your_desired_width = 225;
$string = substr($string, 0, $your_desired_width+1);

if (strlen($string) > $your_desired_width)
{
    $string = wordwrap($string, $your_desired_width);
    $i = strpos($string, "\n");
    if ($i) {
        $string = substr($string, 0, $i);
    }
}
return $string;
}
}

$Dis = new Dispay($connection,$result)

?>