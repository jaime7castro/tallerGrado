<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
            <div id="escudo">
            <img src="images/escudo.png" alt="Heraldica" style="width: 25%; height: 25%">
            </div>
            <div id="logo">
                <img src="images/faro1.gif" alt="faro" style="width: 6%; height: 6%">
                <?php echo CHtml::encode(Yii::app()->name); ?>
            </div>
                
	</div><!-- header -->

    <div id="mainmenu">    
	<div id="topbar" >
		<?php $this->widget('zii.widgets.CMenu',array(
                    'items'=>array(
			array('label'=>'Inicio', 'url'=>array('/site/index')),
			array('label'=>'Area Naval No. 2', 'url'=>array('/site/page', 'view'=>'about')),
			array('label'=>'Contáctenos', 'url'=>array('/site/contact')),
                        array('label'=>'Iniciar Sesión', 'url'=>Yii::app()->user->ui->loginUrl, 'visible'=>Yii::app()->user->isGuest),
			array('label'=>'Cerrar Sesión ('.Yii::app()->user->name.')', 'url'=>Yii::app()->user->ui->logoutUrl, 'visible'=>!Yii::app()->user->isGuest),				
                        array('label'=>'Unidad', 'url'=>array('/site/vCasosUso'),
                            'items'=>array(
                                array('label'=>'Registrar Unidad', 'url'=>array('/unidad/index')),  
                                array('label'=>'Administrar Material y Equipo', 'url'=>array('/materialEquipo/index')), 
                                array('label'=>'Gestionar Tipo de Actividad', 'url'=>array('/tipoActividad/index')),
                                array('label'=>'Realizar Cronograma', 'url'=>array('/cronograma/index')), 
                                array('label'=>'Registrar Aviso', 'url'=>array('/aviso/index')), 
                            ),'visible'=>!Yii::app()->user->isGuest),
                        array('label'=>'Personal', 'url'=>array('/site/vCasosUso'),
                            'items'=>array(
                                array('label'=>'Gestionar Persona', 'url'=>array('/persona/index')),  
                                array('label'=>'Gestionar Estado del Personal', 'url'=>array('/estado/index')), 
                                array('label'=>'Administrar Estado del Personal ', 'url'=>array('/estadoPersona/admin')),
                            ),'visible'=>!Yii::app()->user->isGuest),
                        array('label'=>'Guardia', 'url'=>array('/site/vCasosUso'),
                            'items'=>array(
                                array('label'=>'Gestionar puesto de Guardia', 'url'=>array('/puestoGuardia/index')),  
                                array('label'=>'Gestionar Grupo de Guardia', 'url'=>array('/grupoGuardia/index')), 
                                array('label'=>'Asignar Grupo de Guardia', 'url'=>array('/detalleGrupoGuardia/admin')),
                                array('label'=>'Registrar Servicio de Guardia', 'url'=>array('/servicioGuardia/index')), 
                                array('label'=>'Registrar Novedad', 'url'=>array('/novedad/index')), 
                            ),'visible'=>!Yii::app()->user->isGuest),
                        
                        array('label'=>'Administrar Usuarios','url'=>Yii::app()->user->ui->userManagementAdminUrl, 'visible'=>!Yii::app()->user->isGuest),
                    ),
		)); ?>
	</div><!-- mainmenu -->
    </div>    
      
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
			'homeLink'=>''
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<div id="main-content">
		<?php echo $content; ?>
	</div>
	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> por Jaime Castro y Cristhian Blanco.<br/>
		Todos los derechos reservados.<br/>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
