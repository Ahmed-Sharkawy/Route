<?php

// class Add
// {

//   public $ahmed;
//   public $br;
//   private $maher = "Maher";

//   public function __construct()
//   {
//     echo $this-> ahmed = "Ahmed";
//     echo $this-> br = "<br>";
//   }

//   public function date($date)
//   {
//     return date("Y") - $date;
//     return $this->ahmed = "aa";
//   }

//   public function ww()
//   {
//     return $this->ahmed = "ss";
//   }
// }

// $add = new Add();
// echo $add->date(1998) . "</br>";
// echo $add->ww() . "</br>";
// echo "<pre>";
// print_r($add);
// echo "</pre>";
// echo $add->date(1998);











// class calc
// {

//   public $x;
//   public $y;
//   public $res;

//   public function __construct($x,$y)
//   {
//     $this->x = $x;
//     $this->y = $y;
//   }

//   public  function add()
//   {
//     $this->res = $this->x + $this->y;
//     return $this;
//   }

//   public function sum()
//   {
//     $this->res = $this->x - $this->y;
//     return $this;
//   }

//   public function mult()
//   {
//     $this->res = $this->x * $this->y;
//     return $this;
//   }

//   public function all()
//   {
//     $this->res = $this->x / $this->y;
//     return $this;
//   }

//   public function ress()
//   {
//     echo $this->res;
//   }
// }

// $c1 = new calc(5,5);

// print_r($c1->add());
// echo "<hr>";
// $c1->sum()->ress();
// echo "<hr>";
// $c1->mult()->ress();
// echo "<hr>";
// $c1->all()->ress();




// echo $c1->add();
// echo $c1->mult();
// $c1->ress();
// echo "<hr>";
// $c1->alal();
// $c1->ress();












// class db
// {

//   public $coon;
//   public $sql;

//   public function __construct($data)
//   {
//     $this->coon = new mysqli($data[0], $data[1], $data[2], $data[3]);
//   }

//   public function select($table, $column)
//   {
//     $this->sql = "SELECT $column FROM `$table`";
//     return $this;
//   }

//   public function where($column, $opertor, $value)
//   {
//     $this->sql .= "WHERE $column $opertor $value";
//     return $this;
//   }

//   public function row()
//   {
//     $query = $this->coon->query($this->sql);
//     return $query->fetch_all(MYSQLI_ASSOC);
//   }

// }



// $db = new db(["localhost","root", "", "lmsroute"]);
// $a["instructors"] = $db->select("instructors", "*")->row();
// echo json_encode($a);

// echo json_encode($db->select("instructors", "*")->row());



echo str_replace("ahmed", "d", "$");
