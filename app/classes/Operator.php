<?php


namespace App\classes;


class Operator
{
  //  ==== Operator ====

    /*    * Arithmetic Operator
            *Binary Operator (+, -, *, /, %)
            *Unary Operator (++, --, (-))

        *Assignment Operator (=, +=, -=, *=, /=, %=, .=)
        *Conditional Operator (>, >=, <, <=, ==, !=, ===, !==)
        *Logical Operator (&&, ||, !)
    */

    public $x;
    public $y;
    protected $z;

    public function index()
    {
        $this->x = 10;
        $this->y = 20;
        $this->z = 30;

//  ==== statement ====
    /*
        *Single Line Statement
        * Conditional Statement
            *if
            *if else
            *if else if
            *Switch
     * Repeated Statement
        *For
        *while
        * do while
        *Foreach
        *Array
     */

        switch ($this->y)
        {
            case 10:
                echo "Hello World";
                break;
            case 20:
                echo "Hello Bitm";
                break;
            case 30:
                echo "Hello Bangladesh";
                break;
            default :
                echo "Bye";
        }

//        if ($this->x > $this->y){
//            echo "Hello bitm";
//        }
//        elseif ($this->y > $this->z)
//        {
//            echo "Hello Dhaka";
//        }
//        elseif ($this->z > $this->x){
//            echo "Hello Basis";
//        }
//        else {
//            echo "bye";
//        }


//        if ($this->x > $this->y){
//            echo "It's True";
//        } else {
//            echo "False";
//        }

//    if ($this->x < $this->y){
//        echo "It's True";
//    }

        //Conditional

//        echo ($this->x > $this->y) || ($this->y > $this->z);
//        echo '<br/>';
//        echo ($this->x > $this->y) || ($this->y < $this->z);
//        echo '<br/>';
//        echo ($this->x < $this->y) || ($this->y > $this->z);
//        echo '<br/>';
//        echo ($this->x < $this->y) || ($this->y < $this->z);
//        echo '<br/>';
//        echo ($this->x < $this->y) && ($this->y < $this->z);

        //Logical



        //assignment
//        echo $this->x += $this->y;
//        echo '<br/>';
//        echo $this->x -= $this->y;
//        echo '<br/>';
//        echo $this->x *= $this->y;
//        echo '<br/>';
//        echo $this->x /= $this->y;
//        echo '<br/>';
//        echo $this->x %= $this->y;
//        echo '<br/>';
//        echo $this->x .= $this->y;
//        echo '<br/>';

//        echo $this->x;
//        echo '<br/>';
//        $result = $this->x + $this->y;
//        echo $result;

//        echo -$this->x;
    //Unary
//        echo $this->x++;
//        echo '<br/>';
//        echo $this->x--;
//        echo '<br/>';
//        echo ++$this->x;
//        echo '<br/>';
//        echo $this->x--;
//        echo '<br/>';
//        echo $this->x++;
//        echo '<br/>';
//        echo $this->x--;
//        echo '<br/>';
//        echo ++$this->x;
//        echo '<br/>';
//        echo --$this->x;
//        echo '<br/>';

//        echo $this->x++;
//        echo '<br/>';
//        echo --$this->x;
//        echo '<br/>';
//        echo $this->x;

//        echo $this->x + $this->y;
//        echo '<br/>';
//        echo $this->x - $this->y;
//        echo '<br/>';
//        echo $this->x * $this->y;
//        echo '<br/>';
//        echo $this->x / $this->y;
//        echo '<br/>';
//        echo $this->x % $this->y;
//        echo '<br/>';

    }


}