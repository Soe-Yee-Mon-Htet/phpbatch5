<?php
    // try..catch statement

    // try{
    //     echo
    // } catch(Exception $e){
    //     code to exception is catched
    // }

    function mycolour($color){
        if($color !== "red"){
            throw new Exception ("I hate $color color.");
        };
        return "Yeach! my fav color is $color color.";
    };

    echo mycolour("red");  //Yeach! my fav color is red color.
    echo mycolour("blue"); // error 

    try{
        echo mycolour("black");
    } catch (Exception $error){
        echo "You should not try with this color.";
    };

    try{
        echo mycolour("black");
    } catch (Exception $error){
        echo $error->getMessage();
    };

    function mypower($base,$power){
        if($power > 3){
            throw new Exception ("We not allow over $power");
        };
        $result = pow($base,$power);
        return $result;
    };

    echo mypower(2,3); //8
    
    try{
        echo mypower(2,4);
    } catch (Exception $error) {
        echo $error->getMessage();
    };


    function mycalculate($base,$power){
        if($power > 3){
            throw new Exception ("We do not allow over $power");
        };
        $result = pow($base,$power);
        return $result;
    };

    echo mycalculate(2,4); //error

    try{
        echo mycalculate(2,4);
    } catch(Exception $error){
        echo $error->getMessage();
    } finally{
        echo "Hey there! I am Joker."
    }



?>