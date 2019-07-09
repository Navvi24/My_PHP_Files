<?php
function is_data_valid()
{
  $ret_arr = [];
  $ret_arr['valid']=true;
    if(empty($_POST['name']))
    {
      $ret_arr['errMsg']['name'] = 'Name is missing';
      $ret_arr['valid'] = false;
    }
    else
    {
      $ret_arr['errMsg']['name'] = '';
    }

    if(empty($_POST['rollno']))
    {
      $ret_arr['errMsg']['roll'] = 'Rollno is missing';
      $ret_arr['valid'] = false;
    }
    else
    {
      $ret_arr['errMsg']['roll'] = '';
    }

    if(empty($_POST['father']))
    {
      $ret_arr['errMsg']['father'] = 'Father Name is missing';
      $ret_arr['valid'] = false;
    }
    else
    {
      $ret_arr['errMsg']['father'] = '';
    }

    if(empty($_POST['mother']))
    {
      $ret_arr['errMsg']['mother'] = 'Mother name is missing';
      $ret_arr['valid'] = false;
    }
    else
    {
      $ret_arr['errMsg']['mother'] = '';
    }

    if(empty($_POST["cls"]) || $_POST["cls"] > 12)
    {

        $ret_arr['errMsg']['cls'] = 'INVALID';
        $ret_arr['valid'] = false;
    }
    else
    {
      $ret_arr['errMsg']['cls'] = '';
    }

    if(empty($_POST['gender']))
    {
      $ret_arr['errMsg']['gender'] = 'Gender is not selected';
      $ret_arr['valid'] = false;
    }
    else
    {
      $ret_arr['errMsg']['gender'] = '';
    }

    if(empty($_POST["english"]) || $_POST['english'] > 100)
    {
      $ret_arr['errMsg']['english'] = 'English Marks should be less then 100 and not equal to zero';
      $ret_arr['valid'] = false;
    }
    else
    {
      $ret_arr['errMsg']['english'] = '';
    }

    if(empty($_POST["hindi"]) || $_POST["hindi"] > 100)
    {
      $ret_arr['errMsg']['hindi'] = 'Hindi Marks should be less then 100 and not equal to zero';
      $ret_arr['valid'] = false;
    }
    else
    {
      $ret_arr['errMsg']['hindi'] = '';
    }

    if(empty($_POST["math"]) || $_POST["math"] > 100)
    {
      $ret_arr['errMsg']['math'] = 'Maths Marks should be less then 100 and not equal to zero';
      $ret_arr['valid'] = false;
    }
    else
    {
      $ret_arr['errMsg']['math'] = '';
    }

    if(empty($_POST["social"]) || $_POST["social"] > 100)
    {
      $ret_arr['errMsg']['social'] = 'Social Marks should be less then 100 and not equal to zero';
      $ret_arr['valid'] = false;
    }
    else
    {
      $ret_arr['errMsg']['social'] = '';
    }

    if(empty($_POST["computer"]) || $_POST["computer"] > 100)
    {
      $ret_arr['errMsg']['computer'] = 'Computer Marks should be less then 100 and not equal to zero';
      $ret_arr['valid'] = false;
    }
    else
    {
      $ret_arr['errMsg']['computer'] = '';
    }
    return $ret_arr;
}
 ?>
