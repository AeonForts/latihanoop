<?php
// Class pegawai (CRUD pegawai)
class Model_pegawai{

     // Property
     var $db;
     var $con;
     var $query;
     var $data;
     var $result;


          function __construct()
          {
        // Membuat Object dari Class database
        include '../Config/Database.php';
        $this->db = new Database();
        $this->con=$this->db->Connect();
          }    


     // Method main variabel
     function GetData_All(){

        //Get data command
        $this->query=mysqli_query($this->con,"SELECT * FROM tbl_pegawai ORDER BY status DESC");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
        
    }
    
    // Method main variabel
    function GetData_Laki(){

        //Get data command
        $this->query=mysqli_query($this->con,"SELECT * FROM tbl_pegawai WHERE jns_kel='L'");
        while($this->data=mysqli_fetch_array($this->query)){
        $this->result[]=$this->data;
            }
         return $this->result;

    }


    // Method main variabel
    function GetData_nikah(){

        //Get data command
        $this->query=mysqli_query($this->con,"SELECT * FROM tbl_pegawai WHERE status='M'");
        while($this->data=mysqli_fetch_array($this->query)){
        $this->result[]=$this->data;
            }
         return $this->result;

    }


    // Method main variabel
    function GetData_belum_nikah(){

     //Get data command
     $this->query=mysqli_query($this->con,"SELECT * FROM tbl_pegawai WHERE status='B'");
     while($this->data=mysqli_fetch_array($this->query)){
     $this->result[]=$this->data;
         }
      return $this->result;

 }
 
     function GetData_Umur(){

        //Get data command
        $this->query=mysqli_query($this->con,"SELECT *, (YEAR(CURDATE())-YEAR(tgl_lahir)) AS umur FROM tbl_pegawai WHERE (YEAR(CURDATE())-YEAR(tgl_lahir)) <= 30");
        while($this->data=mysqli_fetch_array($this->query)){
        $this->result[]=$this->data;
            }
         return $this->result;

    }

    
    function GetData_Umur2(){

        //Get data command
        $this->query=mysqli_query($this->con,"SELECT *, (YEAR(CURDATE())-YEAR(tgl_lahir)) AS umur FROM tbl_pegawai WHERE (YEAR(CURDATE())-YEAR(tgl_lahir)) > 30");
        while($this->data=mysqli_fetch_array($this->query)){
        $this->result[]=$this->data;
            }
         return $this->result;
    
    }
    
    function GetData_masa_kerja(){
        
        //Get data command
        $this->query=mysqli_query($this->con,"SELECT *, (YEAR(CURDATE())-YEAR(mulai_kerja)) AS masa_kerja FROM tbl_pegawai WHERE (YEAR(CURDATE())-YEAR(mulai_kerja)) <= 5");
        while($this->data=mysqli_fetch_array($this->query)){
        $this->result[]=$this->data;
            }
         return $this->result;
    
    }

    function GetData_masa_kerja2(){
        
        //Get data command
        $this->query=mysqli_query($this->con,"SELECT *, (YEAR(CURDATE())-YEAR(mulai_kerja)) AS masa_kerja FROM tbl_pegawai WHERE (YEAR(CURDATE())-YEAR(mulai_kerja)) BETWEEN 6 AND 10");
        while($this->data=mysqli_fetch_array($this->query)){
        $this->result[]=$this->data;
            }
         return $this->result;
    
    }

    function GetData_masa_kerja3(){
        
        //Get data command
        $this->query=mysqli_query($this->con,"SELECT *, (YEAR(CURDATE())-YEAR(mulai_kerja)) AS masa_kerja FROM tbl_pegawai WHERE (YEAR(CURDATE())-YEAR(mulai_kerja)) BETWEEN 11 AND 25");
        while($this->data=mysqli_fetch_array($this->query)){
        $this->result[]=$this->data;
            }
         return $this->result;
    
    }

}
?>     