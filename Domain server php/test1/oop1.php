<?php
	class Point
	{
		protected $x;
		protected $y;
		function __construct($x,$y)
		{
			$this->x=$x;
			$this->y=$y;
		}
		function Show()
		{
			echo 'Vertex: ('.$this->x.','.$this->y.') 
				<br/>';
		}
		function Area()
		{
			return 0;
		}
		function Perimeter()
		{
			return 0;
		}
		
	}
	class Rectangle extends Point
	{
			protected $width;
			protected $height;
			function __construct($x,$y,$w,$h)
		{
				parent::__construct($x, $y);
				$this->width=$w;
				$this->height=$h;
		}
		function Show()
		{
			echo 'Vertex: ('.$this->x.','.$this->y.','
					.$this->width.','.$this->height.') 
					<br/>';
		}
		function Area()
		{
			return $this->width * $this->height;
		}
		function Perimeter()
		{
			return ($this->width + $this->height)*2;
		}
	}
	class Circle extends Point//абстрактный класс
	{
		protected $radius;
		function __construct($x,$y,$r)
		{
			parent::__construct($x, $y);
			$this->radius=$r;
		}
		function Show()
		{
			echo 'Circle: ('.$this->x.','.$this->y.','
					.$this->radius.') 
					<br/>';
		}
		function Area()
		{
			return $this->radius * $this->radius * 3.1415;
		}
		function Perimeter()
		{
			return ($this->radius*2*3.1415);
		}
	}
	$p = new Point(200,300);
	//var_dump($p);
	//$p->x=200;
	//$p->y=300;
	$p->Show();
	$r = new Rectangle(100,100,200,150);
	$r->Show();
	var_dump($r);
	echo '<br/>';
	$c = new Circle(50,50,25);
	echo 'Периметр квадрата:'.$r->Perimeter().'<br/>'.'Прощадь квадрата:'.$r->Area().'<br/>';
	echo 'Периметр круга:'.$c->Perimeter().'<br/>'.'Прощадь круга:'.$c->Area().'<br/>';
	$c->Show();
	$figure = array();
	$figure[] = new Rectangle(100,100,200,150);
	$figure[] = new Point(200,300);
	$figure[] = new Circle(50,50,25);
	$figure[] = new Circle(10,120,35);
	$totalArea = 0;
	$totalPerimeter = 0;
	foreach($figure as $f)
	{
		$totalArea += $f->Area();
		$totalPerimeter +=$f->Perimeter();
	}
	echo 'TotalArea:'.$totalArea.'<br/> 
		  TotalPerimetr:'.$totalPerimeter;
	
	
?>