<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="assets/images/favicon.svg"
      type="image/x-icon"
    />
    <title>PlainAdmin Demo | Bootstrap 5 Admin Template</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="<?= base_url("assets/login/css/bootstrap.css");?>" />
    <link rel="stylesheet" href="<?= base_url("assets/css/LineIcons.css");?>" />
    <link rel="stylesheet" href="<?= base_url("assets/css/materialdesignicons.min.css");?>" />
    <link rel="stylesheet" href="<?= base_url("assets/css/fullcalendar.css");?>" />
    <link rel="stylesheet" href="<?= base_url("assets/css/fullcalendar.css");?>" />
    <link rel="stylesheet" href="<?= base_url("assets/css/main.css");?>" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
  </head>
  <body>

    <!-- ======== sidebar-nav start =========== -->
    <aside class="sidebar-nav-wrapper">
      <div class="navbar-logo">
        <a href="alumno">
          <img src="assets/images/logo/logo1.png" alt="logo" />
        </a>
      </div>
      <nav class="sidebar-nav">
        <ul>
          <li class="nav-item nav-item-has-children">
            <a
              href="#0"
              data-bs-toggle="collapse"
              data-bs-target="#ddmenu_1"
              aria-controls="ddmenu_1"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon">
                <svg width="22" height="22" viewBox="0 0 22 22">
                  <path
                    d="M17.4167 4.58333V6.41667H13.75V4.58333H17.4167ZM8.25 4.58333V10.0833H4.58333V4.58333H8.25ZM17.4167 11.9167V17.4167H13.75V11.9167H17.4167ZM8.25 15.5833V17.4167H4.58333V15.5833H8.25ZM19.25 2.75H11.9167V8.25H19.25V2.75ZM10.0833 2.75H2.75V11.9167H10.0833V2.75ZM19.25 10.0833H11.9167V19.25H19.25V10.0833ZM10.0833 13.75H2.75V19.25H10.0833V13.75Z"
                  />
                </svg>
              </span>
              <span class="text">Dashboard</span>
            </a>
            <ul id="ddmenu_1" class="collapse show dropdown-nav">
              <li>
                <a href="index.html" class="active"> Gestor de clases </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="invoice.html">
              <span class="icon">
                <svg
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M17.4166 7.33333C18.9383 7.33333 20.1666 8.56167 20.1666 10.0833V15.5833H16.4999V19.25H5.49992V15.5833H1.83325V10.0833C1.83325 8.56167 3.06159 7.33333 4.58325 7.33333H5.49992V2.75H16.4999V7.33333H17.4166ZM7.33325 4.58333V7.33333H14.6666V4.58333H7.33325ZM14.6666 17.4167V13.75H7.33325V17.4167H14.6666ZM16.4999 13.75H18.3333V10.0833C18.3333 9.57917 17.9208 9.16667 17.4166 9.16667H4.58325C4.07909 9.16667 3.66659 9.57917 3.66659 10.0833V13.75H5.49992V11.9167H16.4999V13.75ZM17.4166 10.5417C17.4166 11.0458 17.0041 11.4583 16.4999 11.4583C15.9958 11.4583 15.5833 11.0458 15.5833 10.5417C15.5833 10.0375 15.9958 9.625 16.4999 9.625C17.0041 9.625 17.4166 10.0375 17.4166 10.5417Z"
                  />
                </svg>
              </span>
              <span class="text">Clases</span>
            </a>
          </li>
          <li class="nav-item nav-item-has-children">
            <a
              href="#0"
              class="collapsed"
              data-bs-toggle="collapse"
              data-bs-target="#ddmenu_3"
              aria-controls="ddmenu_3"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon">
                <svg
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M12.9067 14.2908L15.2808 11.9167H6.41667V10.0833H15.2808L12.9067 7.70917L14.2083 6.41667L18.7917 11L14.2083 15.5833L12.9067 14.2908ZM17.4167 2.75C17.9029 2.75 18.3692 2.94315 18.713 3.28697C19.0568 3.63079 19.25 4.0971 19.25 4.58333V8.86417L17.4167 7.03083V4.58333H4.58333V17.4167H17.4167V14.9692L19.25 13.1358V17.4167C19.25 17.9029 19.0568 18.3692 18.713 18.713C18.3692 19.0568 17.9029 19.25 17.4167 19.25H4.58333C3.56583 19.25 2.75 18.425 2.75 17.4167V4.58333C2.75 3.56583 3.56583 2.75 4.58333 2.75H17.4167Z"
                  />
                </svg>
              </span>
              <span class="text">Configuración</span>
            </a>
            <ul id="ddmenu_3" class="collapse dropdown-nav">
              <li>
                <a href="perfil"> Perfil </a>
              </li>
              <li>
                <a href="signup.html"> Propiedades </a>
              </li>
            </ul>
          </li>
          <span class="divider"><hr /></span>
          
          <li class="nav-item">
            <a href="notification.html">
              <span class="icon">
                <svg
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.16667 19.25H12.8333C12.8333 20.2584 12.0083 21.0834 11 21.0834C9.99167 21.0834 9.16667 20.2584 9.16667 19.25ZM19.25 17.4167V18.3334H2.75V17.4167L4.58333 15.5834V10.0834C4.58333 7.24171 6.41667 4.76671 9.16667 3.94171V3.66671C9.16667 2.65837 9.99167 1.83337 11 1.83337C12.0083 1.83337 12.8333 2.65837 12.8333 3.66671V3.94171C15.5833 4.76671 17.4167 7.24171 17.4167 10.0834V15.5834L19.25 17.4167ZM15.5833 10.0834C15.5833 7.51671 13.5667 5.50004 11 5.50004C8.43333 5.50004 6.41667 7.51671 6.41667 10.0834V16.5H15.5833V10.0834Z"
                  />
                </svg>
              </span>
              <span class="text">Notificaciones</span>
            </a>
          </li>
        </ul>
      </nav>
    </aside>
    <div class="overlay"></div>
    <!-- ======== sidebar-nav end =========== -->

    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
      <!-- ========== header start ========== -->
      <header class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-5 col-md-5 col-6">
              <div class="header-left d-flex align-items-center">
                <div class="menu-toggle-btn mr-20">
                  <button
                    id="menu-toggle"
                    class="main-btn primary-btn btn-hover"
                  >
                    <i class="lni lni-chevron-left me-2"></i> Menu
                  </button>
                </div>
                <div class="header-search d-none d-md-flex">
                  <form action="#">
                    <input type="text" placeholder="Buscar módulos..." />
                    <button><i class="lni lni-search-alt"></i></button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-md-7 col-6">
              <div class="header-right">
                <!-- notification start -->
                <div class="notification-box ml-15 d-none d-md-flex">
                  <button
                    class="dropdown-toggle"
                    type="button"
                    id="notification"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <i class="lni lni-alarm"></i>
                    <span>2</span>
                  </button>
                  <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="notification"
                  >
                    <li>
                      <a href="#0">
                        <div class="image">
                          <img src="assets/images/lead/lead-6.png" alt="" />
                        </div>
                        <div class="content">
                          <h6>
                            John Doe
                            <span class="text-regular">
                              comment on a product.
                            </span>
                          </h6>
                          <p>
                            Lorem ipsum dolor sit amet, consect etur adipiscing
                            elit Vivamus tortor.
                          </p>
                          <span>10 mins ago</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#0">
                        <div class="image">
                          <img src="assets/images/lead/lead-1.png" alt="" />
                        </div>
                        <div class="content">
                          <h6>
                            Jonathon
                            <span class="text-regular">
                              like on a product.
                            </span>
                          </h6>
                          <p>
                            Lorem ipsum dolor sit amet, consect etur adipiscing
                            elit Vivamus tortor.
                          </p>
                          <span>10 mins ago</span>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <!-- notification end -->
                <!-- message start -->
                <div class="header-message-box ml-15 d-none d-md-flex">
                  <button
                    class="dropdown-toggle"
                    type="button"
                    id="message"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <i class="lni lni-envelope"></i>
                    <span>3</span>
                  </button>
                  <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="message"
                  >
                    <li>
                      <a href="#0">
                        <div class="image">
                          <img src="assets/images/lead/lead-5.png" alt="" />
                        </div>
                        <div class="content">
                          <h6>Profesor Rodrigo</h6>
                          <p>Hola chicos, no olviden la clase del Viernes.</p>
                          <span>10 mins ago</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#0">
                        <div class="image">
                          <img src="assets/images/lead/lead-3.png" alt="" />
                        </div>
                        <div class="content">
                          <h6>Administración</h6>
                          <p>Estimada comunidad, el sistema estará en mantención durante el fin de semana.</p>
                          <span>45 mins ago</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#0">
                        <div class="image">
                          <img src="assets/images/lead/lead-2.png" alt="" />
                        </div>
                        <div class="content">
                          <h6>Profesor Luciano</h6>
                          <p>Estimad@s, se abrieron más cupos para la clase del próximo Jueves.</p>
                          <span>3h ago</span>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <!-- message end -->
                <!-- profile start -->
                <div class="profile-box ml-15">
                  <button
                    class="dropdown-toggle bg-transparent border-0"
                    type="button"
                    id="profile"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <div class="profile-info">
                      <div class="info">
                        <h6><?php echo session('nombre')." ".session('apellido') ?></h6>
                        <div class="image">
                          <img
                            src="assets/images/profile/profile-image.png"
                            alt=""
                          />
                          <span class="status"></span>
                        </div>
                      </div>
                    </div>
                    <i class="lni lni-chevron-down"></i>
                  </button>
                  <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="profile"
                  >
                    <li>
                      <a href="perfil">
                        <i class="lni lni-user"></i> Ver perfil
                      </a>
                    </li>
                    <li>
                      <a href="#0">
                        <i class="lni lni-alarm"></i> Notificaciones
                      </a>
                    </li>
                    <li>
                      <a href="#0"> <i class="lni lni-inbox"></i> Mensajes </a>
                    </li>
                    <li>
                      <a href="#0"> <i class="lni lni-cog"></i> Configuración </a>
                    </li>
                    <li>
                      <a href="logout"> <i class="lni lni-exit"></i> Cerrar Sesión </a>
                    </li>
                  </ul>
                </div>
                <!-- profile end -->
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- ========== header end ========== -->

      <!-- ========== section start ========== -->
      <section class="section" onload="<?= base_url("/public/getTarjetas");?>">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title mb-30">
                  <h2>Eventos</h2>
                </div>
              </div>
              <!-- end col -->
              <div class="col-md-6">
                <div class="breadcrumb-wrapper mb-30">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="#0">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">
                        Gestor de clases
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== title-wrapper end ========== -->
          <div class="row" >
          </div>
          <!-- End Row -->
          <div class="row">
          </div>
          <!-- End Row -->
          <div class="row">

            <div class="col-lg-12">
              <div class="card-style mb-30">
                <div
                  class="
                    title
                    d-flex
                    flex-wrap
                    align-items-center
                    justify-content-between
                  "
                >
                  <div class="left">
                    <h6 class="text-medium mb-30">Clases</h6>
                  </div>
        
                </div>
                <!-- End Title -->
                <div class="table-responsive">
                  <table class="table top-selling-table" id="example2">
                    <thead>
                      <tr>
                        <th>
                          <h6 class="text-sm text-medium">Eventos</h6>
                        </th>
                        <th class="min-width">
                          <h6 class="text-sm text-medium">
                            Fecha <i class="lni lni-arrows-vertical"></i>
                          </h6>
                        </th>
                        <th class="min-width">
                          <h6 class="text-sm text-medium">
                            Hora <i class="lni lni-arrows-vertical"></i>
                          </h6>
                        </th>
                        <th class="min-width">
                          <h6 class="text-sm text-medium">
                            Sala <i class="lni lni-arrows-vertical"></i>
                          </h6>
                        </th>
                        <th class="min-width">
                          <h6 class="text-sm text-medium">
                            Aforo <i class="lni lni-arrows-vertical"></i>
                          </h6>
                        </th>
                        <th class="min-width">
                          <h6 class="text-sm text-medium">
                            Estado <i class="lni lni-arrows-vertical"></i>
                          </h6>
                        </th>
                        <th>
                          <h6 class="text-sm text-medium text-end">
                            Acciones <i class="lni lni-arrows-vertical"></i>
                          </h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php                        
                          if (isset($modulos)){
                            
                            foreach ($modulos as $key => $value) {
                              ?>
                                <tr>
                                  <td>
                                    <div class="product">
                                      <div class="image">
                                        <img
                                          src="assets/images/products/product-mini-1.jpg"
                                          alt=""
                                        />
                                      </div>
                                      <p class="text-sm"><?php echo $value['nombre_modulo'];?></p>
                                    </div>
                                  </td>
                                  <td>
                                    <p class="text-sm"><?php echo $value['fecha'];?></p>
                                  </td>
                                  <td>
                                    <span class="status-btn "><?php echo $value['bloque'];?></span>
                                  </td>
                                  <td>
                                    <span class="status-btn"><?php echo $value['sala'];?></span>
                                  </td>
                                  <td>
                                    <span class="status-btn"><?php echo $value['aforo'];?></span>
                                  </td>
                                  <td>
                                  <?php if ($value['estado']=="Aprobado"){ ?>
                                    <span class="status-btn success-btn"><?php
                                      echo "Aprobado";
                                    }elseif ($value['estado']=="Pendiente") {?>
                                      <span class="status-btn btn-warning"><?php
                                      echo "Pendiente";
                                    }elseif ($value['estado']=="Rechazado") {?>
                                      <span class="status-btn danger-btn"><?php
                                      echo "Rechazado";
                                    }elseif ($value['estado']=="Cursado") {?>
                                      <span class="status-btn danger-btn"><?php
                                      echo "Cursado";
                                    }?></span>
                                  </td>
                                  <td>
                                    <div class="action justify-content-end">
                                      <button
                                        class="more-btn ml-10 dropdown-toggle"
                                        id="moreAction1"
                                        data-bs-toggle="dropdown"
                                        aria-expanded="false"
                                      >
                                        <i class="lni lni-more-alt"></i>
                                      </button>
                                      <ul
                                        class="dropdown-menu dropdown-menu-end"
                                        aria-labelledby="moreAction1"
                                      >
                                      <?php if ($value['estado']==1){ ?>
                                        <li class="dropdown-item">
                                          <!-- <a href="encargado/<?php $value['id'];?>" class="text-gray evento-anular">Anular</a> -->
                                          <a href=#0 class="text-gray evento-anular" id=<?php echo $value['id'];?>  >Anular</a>
                                        </li>
                                      <?php  } else {?>
                                        <li class="dropdown-item">
                                          <!-- <a href="encargado/<?php $value['id'];?>" class="text-gray evento-anular">Anular</a> -->
                                          <a href=#0 class="text-gray evento-anular" id=<?php echo $value['id'];?>  >Aprobar</a>
                                        </li>
                                      <?php }?>
                                      </ul>
                                    </div>
                                  </td>
                                </tr>
                              <?php
                            }
                          }
                      ?>
                    </tbody>
                  </table>
                  <!-- End Table -->
                </div>
              </div>
            </div>
            <!-- End Col -->
          </div>
          
          <!-- End Row -->
        </div>
        <!-- end container -->
      </section>
      <!-- ========== section end ========== -->


      <section class="section" onload="<?= base_url("/public/getTarjetas");?>">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title mb-30">
                  <h2>Dependencias</h2>
                </div>
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== title-wrapper end ========== -->
          <div class="row" >
          </div>
          <!-- End Row -->
          <div class="row">
          </div>
          <!-- End Row -->
          <div class="row">

            <div class="col-lg-12">
              <div class="card-style mb-30">
                <div
                  class="
                    title
                    d-flex
                    flex-wrap
                    align-items-center
                    justify-content-between
                  "
                >
                  <div style="margin-left: auto">
                    <button class="primary-btn btn-hover" style="width: 200px; height: 25px; border:none; border-radius: 10px; margin-bottom: 10px" data-bs-toggle="modal" data-bs-target="#ModalDependencias"> Añadir Dependencia </button>    
                  </div>
                </div>
                <!-- End Title -->
                <div class="table-responsive">
                  <table class="table top-selling-table" id="example">
                    <thead>
                      <tr>
                        <th>
                          <h6 class="text-sm text-medium">ID</h6>
                        </th>
                        <th class="min-width">
                          <h6 class="text-sm text-medium">
                            Nombre Sala <i class="lni lni-arrows-vertical"></i>
                          </h6>
                        </th>
                        <th class="min-width">
                          <h6 class="text-sm text-medium">
                            Aforo <i class="lni lni-arrows-vertical"></i>
                          </h6>
                        </th>
                        <th>
                          <h6 class="text-sm text-medium text-end">
                            Acciones <i class="lni lni-arrows-vertical"></i>
                          </h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php                        
                          if (isset($dependencias)){
                            
                            foreach ($dependencias as $key => $value) {

                              ?>
                                <tr>
                                  <td>
                                      <?php echo $value['id'];?>
                                  </td>
                                  <td>
                                    <?php echo $value['nombre'];?>
                                  </td>
                                  <td>
                                    <?php echo $value['aforo'];?>
                                  </td>
                                  <td>
                                    <div class="action justify-content-end">
                                      <button
                                        class="more-btn ml-10 dropdown-toggle"
                                        id="moreAction1"
                                        data-bs-toggle="dropdown"
                                        aria-expanded="false"
                                      >
                                        <i class="lni lni-more-alt"></i>
                                      </button>
                                      <ul
                                        class="dropdown-menu dropdown-menu-end"
                                        aria-labelledby="moreAction1"
                                      >
                                        <li class="dropdown-item">
                                          <a href="#0" class="text-gray edit">Modificar</a>
                                        </li>
                                        <li class="dropdown-item">
                                          <a href="#0" class="text-gray delete">Eliminar</a>
                                        </li>
                                      </ul>
                                    </div>
                                  </td>
                                </tr>
                              <?php
                            }
                          }
                        
                      ?>

                      
                    </tbody>
                  </table>
                  <!-- End Table -->
                </div>
              </div>
            </div>
            <!-- End Col -->
          </div>
          
          <!-- End Row -->
        </div>
        <!-- end container -->
      </section>

      <!-- ========== footer start =========== -->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 order-last order-md-first">
              <div class="copyright text-center text-md-start">
                <p class="text-sm">
                  Designed and Developed by
                  <a
                    href="https://plainadmin.com"
                    rel="nofollow"
                    target="_blank"
                  >
                    PlainAdmin
                  </a>
                </p>
              </div>
            </div>
            <!-- end col-->
            <div class="col-md-6">
              <div
                class="
                  terms
                  d-flex
                  justify-content-center justify-content-md-end
                "
              >
                <a href="#0" class="text-sm">Term & Conditions</a>
                <a href="#0" class="text-sm ml-15">Privacy & Policy</a>
              </div>
            </div>
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </footer>
      <!-- ========== footer end =========== -->



      <div class="modal fade" id="ModalDependencias" tabindex="-1" aria-labelledby="ModalDependenciasLabel" aria-hidden="true">
        <div class="modal-dialog">
          <!-- <form action="" method="POST" id="createDependencia"> -->
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="ModalDependenciasLabel">Añadir Dependencia</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div class="mb-3">
                    <label for="nombre_sala" class="col-form-label">Nombre Sala</label>
                    <input type="text" class="form-control" id="nombre_sala">
                  </div>
                  <div class="mb-3">
                    <label for="aforo" class="col-form-label">Aforo permitido</label>
                    <input type="text" class="form-control" id="aforo" style="width: 100px">
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" onclick="nuevaDependencia()" >Guardar</button>
              </div>
            </div>
          <!-- </form> -->
        </div>
      </div>

      <div class="modal fade" id="EditDependencias" tabindex="-1" aria-labelledby="EditDependenciasLabel" aria-hidden="true">
        <div class="modal-dialog">
          <form action="" id="editDependencia">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="EditDependenciasLabel">Modificar Dependencia</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div class="mb-3">
                    <label for="nombre_sala" class="col-form-label">Nombre Sala</label>
                    <input type="text" class="form-control" id="nombre_sala_mod">
                  </div>
                  <div class="mb-3">
                    <label for="aforo" class="col-form-label">Aforo permitido</label>
                    <input type="text" class="form-control" id="aforo_mod" style="width: 100px">
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="modal fade" id="DelDependencias" tabindex="-1" aria-labelledby="DelDependenciasLabel" aria-hidden="true">
        <div class="modal-dialog">
          <form action="" id="delDependencia">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="DelDependenciasLabel">Eliminar Dependencia</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  ¿Está seguro de que desea eliminar ésta dependencia?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger">Eliminar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    
  

    </main>
    <!-- ======== main-wrapper end =========== -->

    <!-- ========= All Javascript files linkup ======== -->
    <script src="<?= base_url("assets/js/bootstrap.bundle.min.js") ?>" ></script>
    <script src="<?= base_url("assets/js/Chart.min.js") ?> "></script>
    <script src="<?= base_url("assets/js/dynamic-pie-chart.js") ?> "></script>
    <script src="<?= base_url("assets/js/moment.min.js") ?> "></script>
    <script src="<?= base_url("assets/js/fullcalendar.js") ?> "></script>
    <script src="<?= base_url("assets/js/jvectormap.min.js") ?> "></script>
    <script src="<?= base_url("assets/js/world-merc.js") ?> "></script>
    <script src="<?= base_url("assets/js/polyfill.js") ?> "></script>
    <script src="<?= base_url("assets/js/main.js") ?> "></script>
    <script src="<?= base_url("assets/js/jquery.js") ?> "></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>


    <script>

      function nuevaDependencia() {
        let nombre = $('#nombre_sala').val();
        let aforo = $('#aforo').val();
        console.log("Datos: " + nombre + " - " + aforo);
        $.ajax({
          method: "POST",
          url: "nuevaDependencia",
          data: {nombre: nombre, aforo: aforo}
        }).done(function (data){
          $('#ModalDependencias').modal('toggle');
          window.location.reload();
        });
      }

      $(document).ready(function() {
          var table= $('#example').DataTable();

          //modificar
          table.on('click', '.edit', function() {

            $tr = $(this).closest('tr');
            if ($($tr).hasClass('child')) {
                $tr = $tr.prev('.parent');
            }


            var data = table.row($tr).data();
            console.log(data);

            $('#nombre_sala_mod').val(data[1]);
            $('#aforo_mod').val(data[2]);

            $('#editDependencia').attr('action', '/aquivalaruta/'+data[0]);
            $('#EditDependencias').modal('show');

          });


          //eliminar
          table.on('click', '.delete', function() {
            alert("asd");
            $tr = $(this).closest('tr');
            if ($($tr).hasClass('child')) {
                $tr = $tr.prev('.parent');
            }

            var data = table.row($tr).data();


            $('#delDependencia').attr('action', '/eliminarDependencia/'+data[0]);
            $('#DelDependencias').modal('show');

          }  );
      } );


      $(document).ready(function() {
          $('#example2').DataTable();
      } );

      $(document).ready(function(){
        $(document).on('click','.evento-anular', function (){
          $.ajax({
            method: "POST",
            url: "anularEvento",
            data: {id: this.id}
          }).done(function (data){
            window.location.reload();
            alert(data);
          });
        });
      });

      var ModalDependencias = document.getElementById('ModalDependencias')
        ModalDependencias.addEventListener('show.bs.modal', function (event) {
          // Button that triggered the modal
          var button = event.relatedTarget
          // Extract info from data-bs-* attributes
          var recipient = button.getAttribute('data-bs-whatever')

      })

      var DelDependencias = document.getElementById('DelDependencias')
        DelDependencias.addEventListener('show.bs.modal', function (event) {
          // Button that triggered the modal
          var button = event.relatedTarget
          // Extract info from data-bs-* attributes
          var recipient = button.getAttribute('data-bs-whatever')

      })
      // ======== jvectormap activation
      var markers = [
        { name: "Egypt", coords: [26.8206, 30.8025] },
        { name: "Russia", coords: [61.524, 105.3188] },
        { name: "Canada", coords: [56.1304, -106.3468] },
        { name: "Greenland", coords: [71.7069, -42.6043] },
        { name: "Brazil", coords: [-14.235, -51.9253] },
      ];

      var jvm = new jsVectorMap({
        map: "world_merc",
        selector: "#map",
        zoomButtons: true,

        regionStyle: {
          initial: {
            fill: "#d1d5db",
          },
        },

        labels: {
          markers: {
            render: (marker) => marker.name,
          },
        },

        markersSelectable: true,
        selectedMarkers: markers.map((marker, index) => {
          var name = marker.name;

          if (name === "Russia" || name === "Brazil") {
            return index;
          }
        }),
        markers: markers,
        markerStyle: {
          initial: { fill: "#2F80ED" },
          selected: { fill: "#ff5050" },
        },
        markerLabelStyle: {
          initial: {
            fontWeight: 400,
            fontSize: 14,
          },
        },
      });
      // ====== calendar activation
      document.addEventListener("DOMContentLoaded", function () {
        var calendarMiniEl = document.getElementById("calendar-mini");
        var calendarMini = new FullCalendar.Calendar(calendarMiniEl, {
          initialView: "dayGridMonth",
          headerToolbar: {
            end: "today prev,next",
          },
        });
        calendarMini.render();
      });
      // =========== chart one start
      var ctx1 = document.getElementById("Chart1").getContext("2d");
      var chart1 = new Chart(ctx1, {
        // The type of chart we want to create
        type: "line", // also try bar or other graph types

        // The data for our dataset
        data: {
          labels: [
            "Jan",
            "Fab",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",
          ],
          // Information about the dataset
          datasets: [
            {
              label: "",
              backgroundColor: "transparent",
              borderColor: "#2F80ED",
              data: [
                600, 700, 750, 800, 760, 820, 690, 740, 720, 890, 776, 900,
              ],
              pointBackgroundColor: "transparent",
              pointHoverBackgroundColor: "#2F80ED",
              pointBorderColor: "transparent",
              pointHoverBorderColor: "#fff",
              pointHoverBorderWidth: 5,
              pointBorderWidth: 5,
              pointRadius: 8,
              pointHoverRadius: 8,
            },
          ],
        },

        // Configuration options
        options: {
          tooltips: {
            callbacks: {
              labelColor: function (tooltipItem, chart) {
                return {
                  backgroundColor: "#ffffff",
                };
              },
            },
            intersect: false,
            backgroundColor: "#f9f9f9",
            titleFontColor: "#8F92A1",
            titleFontColor: "#8F92A1",
            titleFontSize: 12,
            bodyFontColor: "#171717",
            bodyFontStyle: "bold",
            bodyFontSize: 16,
            multiKeyBackground: "transparent",
            displayColors: false,
            xPadding: 30,
            yPadding: 10,
            bodyAlign: "center",
            titleAlign: "center",
          },

          title: {
            display: false,
          },
          legend: {
            display: false,
          },

          scales: {
            yAxes: [
              {
                gridLines: {
                  display: false,
                  drawTicks: false,
                  drawBorder: false,
                },
                ticks: {
                  padding: 35,
                  max: 1200,
                  min: 500,
                },
              },
            ],
            xAxes: [
              {
                gridLines: {
                  drawBorder: false,
                  color: "rgba(143, 146, 161, .1)",
                  zeroLineColor: "rgba(143, 146, 161, .1)",
                },
                ticks: {
                  padding: 20,
                },
              },
            ],
          },
        },
      });
      // =========== chart one end

      // =========== chart two start
      var ctx2 = document.getElementById("Chart2").getContext("2d");
      var chart2 = new Chart(ctx2, {
        // The type of chart we want to create
        type: "bar", // also try bar or other graph types
        // The data for our dataset
        data: {
          labels: [
            "Jan",
            "Fab",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",
          ],
          // Information about the dataset
          datasets: [
            {
              label: "",
              backgroundColor: "#2F80ED",
              barThickness: 6,
              maxBarThickness: 8,
              data: [
                600, 700, 1000, 700, 650, 800, 690, 740, 720, 1120, 876, 900,
              ],
              borderRadius: 100,
              pointBackgroundColor: "#F3F6F8",
              pointHoverBackgroundColor: "#5243AA",
              pointBorderColor: "#F3F6F8",
              pointHoverBorderColor: "#fff",
              pointHoverBorderWidth: 5,
              pointBorderWidth: 5,
              pointRadius: 8,
              pointHoverRadius: 8,
            },
          ],
        },
        // Configuration options
        options: {
          borderColor: "#F3F6F8",
          borderWidth: 15,
          backgroundColor: "#F3F6F8",
          tooltips: {
            callbacks: {
              labelColor: function (tooltipItem, chart) {
                return {
                  backgroundColor: "rgba(104, 110, 255, .0)",
                };
              },
            },
            backgroundColor: "#F3F6F8",
            titleFontColor: "#8F92A1",
            titleFontSize: 12,
            bodyFontColor: "#171717",
            bodyFontStyle: "bold",
            bodyFontSize: 16,
            multiKeyBackground: "transparent",
            displayColors: false,
            xPadding: 30,
            yPadding: 10,
            bodyAlign: "center",
            titleAlign: "center",
          },

          title: {
            display: false,
          },
          legend: {
            display: false,
          },

          scales: {
            yAxes: [
              {
                gridLines: {
                  display: false,
                  drawTicks: false,
                  drawBorder: false,
                },
                ticks: {
                  padding: 35,
                  max: 1200,
                  min: 0,
                },
              },
            ],
            xAxes: [
              {
                gridLines: {
                  display: false,
                  drawBorder: false,
                  color: "rgba(143, 146, 161, .1)",
                  zeroLineColor: "rgba(143, 146, 161, .1)",
                },
                ticks: {
                  padding: 20,
                },
              },
            ],
          },
        },
      });
      // =========== chart two end

      // =========== chart three start
      var ctx3 = document.getElementById("Chart3").getContext("2d");
      var chart3 = new Chart(ctx3, {
        // The type of chart we want to create
        type: "line", // also try bar or other graph types

        // The data for our dataset
        data: {
          labels: [
            "Jan",
            "Fab",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",
          ],
          // Information about the dataset
          datasets: [
            {
              label: "Revenue",
              backgroundColor: "transparent",
              borderColor: "#5243AA",
              data: [80, 120, 110, 100, 130, 150, 115, 145, 140, 130, 160, 210],
              pointBackgroundColor: "transparent",
              pointHoverBackgroundColor: "#5243AA",
              pointBorderColor: "transparent",
              pointHoverBorderColor: "#fff",
              pointHoverBorderWidth: 3,
              pointBorderWidth: 5,
              pointRadius: 5,
              pointHoverRadius: 8,
            },
            {
              label: "Profit",
              backgroundColor: "transparent",
              borderColor: "#686EFF",
              data: [
                120, 160, 150, 140, 165, 210, 135, 155, 170, 140, 130, 200,
              ],
              pointBackgroundColor: "transparent",
              pointHoverBackgroundColor: "#686EFF",
              pointBorderColor: "transparent",
              pointHoverBorderColor: "#fff",
              pointHoverBorderWidth: 3,
              pointBorderWidth: 5,
              pointRadius: 5,
              pointHoverRadius: 8,
            },
            {
              label: "Order",
              backgroundColor: "transparent",
              borderColor: "#FF8730",
              data: [180, 110, 140, 135, 100, 90, 145, 115, 100, 110, 115, 150],
              pointBackgroundColor: "transparent",
              pointHoverBackgroundColor: "#FF8730",
              pointBorderColor: "transparent",
              pointHoverBorderColor: "#fff",
              pointHoverBorderWidth: 3,
              pointBorderWidth: 5,
              pointRadius: 5,
              pointHoverRadius: 8,
            },
          ],
        },

        // Configuration options
        options: {
          tooltips: {
            callbacks: {
              labelColor: function (tooltipItem, chart) {
                return {
                  backgroundColor: "rgba(104, 110, 255, .0)",
                };
              },
            },
            intersect: false,
            backgroundColor: "#fbfbfb",
            titleFontColor: "#8F92A1",
            titleFontSize: 16,
            titleFontFamily: "Inter",
            titleFontStyle: "400",
            bodyFontColor: "#171717",
            bodyFontSize: 16,
            multiKeyBackground: "transparent",
            displayColors: false,
            xPadding: 30,
            yPadding: 15,
            borderColor: "rgba(143, 146, 161, .1)",
            borderWidth: 1,
            title: false,
          },

          title: {
            display: false,
          },

          layout: {
            padding: {
              top: 0,
            },
          },

          legend: false,

          scales: {
            yAxes: [
              {
                gridLines: {
                  display: false,
                  drawTicks: false,
                  drawBorder: false,
                },
                ticks: {
                  padding: 35,
                  max: 300,
                  min: 50,
                },
              },
            ],
            xAxes: [
              {
                gridLines: {
                  drawBorder: false,
                  color: "rgba(143, 146, 161, .1)",
                  zeroLineColor: "rgba(143, 146, 161, .1)",
                },
                ticks: {
                  padding: 20,
                },
              },
            ],
          },
        },
      });
      // =========== chart three end

      // ================== chart four start
      var ctx4 = document.getElementById("Chart4").getContext("2d");
      var chart4 = new Chart(ctx4, {
        // The type of chart we want to create
        type: "bar", // also try bar or other graph types
        // The data for our dataset
        data: {
          labels: ["Jan", "Fab", "Mar", "Apr", "May", "Jun"],
          // Information about the dataset
          datasets: [
            {
              label: "",
              backgroundColor: "#2F80ED",
              barThickness: "flex",
              maxBarThickness: 8,
              data: [600, 700, 1000, 700, 650, 800],
              pointBackgroundColor: "#F3F6F8",
              pointHoverBackgroundColor: "#5243AA",
              pointBorderColor: "#F3F6F8",
              pointHoverBorderColor: "#fff",
              pointHoverBorderWidth: 5,
              pointBorderWidth: 5,
              pointRadius: 8,
              pointHoverRadius: 8,
            },
            {
              label: "",
              backgroundColor: "#EB5757",
              barThickness: "flex",
              maxBarThickness: 8,
              data: [690, 740, 720, 1120, 876, 900],
              pointBackgroundColor: "#F3F6F8",
              pointHoverBackgroundColor: "#5243AA",
              pointBorderColor: "#F3F6F8",
              pointHoverBorderColor: "#fff",
              pointHoverBorderWidth: 5,
              pointBorderWidth: 5,
              pointRadius: 8,
              pointHoverRadius: 8,
            },
          ],
        },
        // Configuration options
        options: {
          borderColor: "#F3F6F8",
          borderWidth: 15,
          backgroundColor: "#F3F6F8",
          tooltips: {
            callbacks: {
              labelColor: function (tooltipItem, chart) {
                return {
                  backgroundColor: "rgba(104, 110, 255, .0)",
                };
              },
            },
            backgroundColor: "#F3F6F8",
            titleFontColor: "#8F92A1",
            titleFontSize: 12,
            bodyFontColor: "#171717",
            bodyFontStyle: "bold",
            bodyFontSize: 16,
            multiKeyBackground: "transparent",
            displayColors: false,
            xPadding: 30,
            yPadding: 10,
            bodyAlign: "center",
            titleAlign: "center",
          },

          title: {
            display: false,
          },
          legend: {
            display: false,
          },

          scales: {
            yAxes: [
              {
                gridLines: {
                  display: false,
                  drawTicks: false,
                  drawBorder: false,
                },
                ticks: {
                  padding: 35,
                  max: 1200,
                  min: 0,
                },
              },
            ],
            xAxes: [
              {
                gridLines: {
                  display: false,
                  drawBorder: false,
                  color: "rgba(143, 146, 161, .1)",
                  zeroLineColor: "rgba(143, 146, 161, .1)",
                },
                ticks: {
                  padding: 20,
                },
              },
            ],
          },
        },
      });
      // =========== chart four end
    </script>
  </body>
</html>
