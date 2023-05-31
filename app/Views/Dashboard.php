<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Dashboard</title>
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

    *{
        margin: 0;
        padding: 0;
        outline: none;
        border:none;
        text-decoration: none;
        box-sizing: border-box;
        font-family:"Poppins", sans-serif;
    }

    body{
        background: white;
    }

    .form-control{
        background-color: #b7b7b7 !important;
    }

    .navbar-global {
        position:relative;
        top: 0;
        bottom: 0;
        height: 100vh;
        left: 0;
        background: #1B1B1B;
        overflow: hidden;
        box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
    }

    .navbar-global ul{
        list-style: none !important;
        padding-left: 0 !important;
    }

    .navbar-global li{
        cursor: pointer !important;
    }

    .navbar-global a{
        text-decoration: none !important;
        cursor: pointer !important;
        padding: 17px !important;
        font-size: 12px !important;
        width: 100%;
    }

    .logo{
        text-align: center;
        
    }

    .logo img{
        width: 60px;
        height: 60px;
        border-radius: 50%;
        
    }

    .logo span{
        font-weight: bold;
        padding-left: 15px;
        font-size: 18px;
        text-transform: uppercase;
        
    }

    .navbar-global a{
        color: #b7b7b7;
        font-size: 10px;
        display: table;
        padding: 10px;
        margin-top: 10px !important;
    }

    .navbar-global .fas{
        position: relative;
        width: 66px;
        height: 30px;
        font-size: 20px;
        text-align:center;
    }

    .navbar-global li:not(:first-child) a:hover {
        color: #1B1B1B !important;
        background: #eee;
        cursor: pointer;
    }


    .logout{
        position: relative;
        bottom: 0;
    }

    /* section */

    .main{
        position relative;
        padding: 20px;
        width: 100%;
        align-items: center;
    }

    .main-top{
        display: flex;
        width: 100%;
    }

    .main-top i{
        position: absolute;
        right: 0;
        margin: 10px 30px;
        color: rgb(11, 109, 109);
        cursor: pointer;
    }

    .main-skills{
        display: flex;
        margin-top: 20px;
    }

    .main-skills .card{
        width: 25%;
        margin: 10px;
        background: #fff;
        text-align: center;
        border-radius: 20px;
        padding: 10px;
        box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
    }

    .main-skills .card h3{
        margin: 10px;
        text-transform: capitalize;
    }

    .main-skills .card p{
        font-size: 12px;
    }

    .main-skills .card button{
        background: orangered;
        color: #fff;
        padding: 7px 15px;
        border-radius: 10px;
        margin-top: 15px;
        cursor: pointer;
    }

    .main-skills .card button:hover{
        background: rgba(223, 70, 15, 0.856);
    }

    .main-skills .card i{
        font-size: 22px;
        padding: 10px;
    }

    /* course */

    .main-sourse{
        margin-top: 20px;
        text-transform: capitalize;
    }

    .course-box{
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
    }

    .course-box ul{
        list-style: none;  
        display: flex;
    }

    .course-box ul li{
        margin: 10px;
        color: gray;
        cursor: pointer;
    }

    /* .course-box ul .active{
        color: #000;
        border-bottom: 1px solid #000;
    } */

    .active:hover{
        color: #000;
        border-bottom: 1px solid #000;
    }

    .course-box .course{
        display: flex;
    }

    .box{
        width: 33%;
        padding: 10px; 
        margin: 10px;
        border-radius: 10px;
        background: rgb(235, 233, 233);
        box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
    }

    .box p{
        font-size: 12px;
        margin-top: 5px;
    }

    .box button{
        background: #000;
        color: #fff;
        padding: 7px 10px;
        border-radius: 10px;
        margin-top: 3rem;
        cursor: pointer;
    }
    
    .box button:hover{
        background: rgba(0, 0, 0, 0.482);
    }

    .box i{
        font-size: 7rem;
        float: right;
        margin: -20px 20px 20px 0;
    }

    .html{
        color: rgb(25, 94, 54);
    }

    .css{
        color: rgb(104, 179, 35);
    }

    .js{
        color: rgb(28, 98, 179);
    }

    @media only screen and (max-width: 1000px) {
            i{
                display:none;
            }
            
        }
        
</style>
<body>
    <div class="container-fluid ps-0">
        <div class="row">
            <div class="col-2">
                <nav class="navbar-global">
                    <ul>
                        <li><a class="logo">
                            <img src="<?= base_url();?>assets/img/Leet Logo.png"/>
                            <span class="navBar-daniel">DashBoard</span>
                        </a></li>
                        <li class="navBar-daniel" >
                            <a href="Dashboard"> 
                                <i class="fas fa-home" ></i> Home
                         </a>
                        </li>
                        <li class="navBar-daniel">
                            <a href="CadsPedidos">
                                <i class="fas fa-solid fa-dolly"></i> Cadastro de Pedidos
                            </a>
                        </li>
                        <!-- <li class="navBar-daniel"><a href="">
                                <i class="fas fa-wine-glass-empty"></i> Cadastro de Arte
                            </a>
                        </li> -->
                        <li class="navBar-daniel">
                            <a href="CadsCliente">
                                <i class="fas fa-user"></i> Cadastro de Clientes
                            </a>
                        </li>
                        <li class="navBar-daniel">
                            <a href="CadsProduto">
                                <i class="fas fa-tasks"></i> Cadastro de Produtos
                            </a>
                        </li>
                        <li class="navBar-daniel">
                            <a href="CadsUsuario">
                                <i class="fas fa-solid fa-clipboard-user"></i> Cadastro de Usuários
                            </a>
                        </li>
                        <!-- <li class="navBar-daniel">
                            <a href="">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                        </li> -->
                        <li class="navBar-daniel">
                            <a href="login" class="logout">
                                <i class="fas fa-sign-out-alt"></i> Sair
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-10">
                <section class="main" style="">
                    <?php echo view($pagina);  ?>
                </section>
            </div>
        </div>
    </div>
</body>
</html>