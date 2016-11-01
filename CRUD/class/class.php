<?php
class Desarrollo
{
    private $dbh;
    private $n;
    
    public function __construct()
    {
        $this->dbh=new PDO('pgsql:host=localhost;port=5432;dbname=ejmplo2', "postgres", "12345");
        $this->n=array();
    }
    public function get_usuario()
    {
        $sql="select * from usuario ;";
        foreach ($this->dbh->query($sql) as $row)
        {
            $this->n[]=$row;
        }
            return $this->n;
            $this->dbh=null;
    }

    public function get_noticia_por_id($id)
    {
        $sql="select * from usuario where id= ? ;";

        $stmt=$this->dbh->prepare($sql);
        if ($stmt->execute( array($id) ))
        {
            while ($row = $stmt->fetch())
            {
                $this->n[]=$row;
            }
            return $this->n;
            $this->dbh=null;
        }
    }
    public function edit()
    {
        
         if(empty($_POST["nombre"]) or empty($_POST["usuario"]) or empty($_POST["contraseña"]))
       {
            header("Location: edit.php?m=1&id=".$_POST["id"]);
            exit;
       }
       $sql="update usuario
            set
            nombre=?,
            usuario=?,
            contraseña=?
            where
            id=?
            ";
        $stmt=$this->dbh->prepare($sql);
        $stmt->bindValue(1,$_POST["nombre"], PDO::PARAM_STR);
        $stmt->bindValue(2,$_POST["usuario"],PDO::PARAM_STR);
        $stmt->bindValue(3,$_POST["contraseña"],PDO::PARAM_STR);
        $stmt->bindValue(4,$_POST["id"],PDO::PARAM_STR);
       $stmt->execute();
        $this->dbh=null;
        header("Location: edit.php?m=2&id=".$_POST["id"]);

}
    public function add()
    {
        
        if(empty($_POST["nombre"]) or empty($_POST["usuario"])or empty($_POST["contraseña"]))
       {
            header("Location: add.php?m=1");
            exit;
       }
       $sql="insert into usuario values (default,?,?,?);";
        $stmt=$this->dbh->prepare($sql);
        $stmt->bindValue(1, $_POST["nombre"], PDO::PARAM_INT);
        $stmt->bindValue(2,$_POST["usuario"],PDO::PARAM_STR);
         $stmt->bindValue(3,$_POST["contraseña"],PDO::PARAM_STR);
       $stmt->execute();
        $this->dbh=null;
        header("Location: add.php?m=2");
    }

    public function eliminar($id)
    {
        $sql="delete from usuario where id=?";
        $stmt=$this->dbh->prepare($sql);
        $stmt->bindParam(1,$id);
        $stmt->execute();
        $this->dbh=null;
        header("Location: index.php?m=1");
    }


    
}
?>