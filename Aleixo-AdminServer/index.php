<canvas id="bgCanvas"></canvas>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.3.1/dist/css/uikit.min.css" />

        <!-- UIkit JS -->
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.1/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.1/dist/js/uikit-icons.min.js"></script>

        <!-- NAV ICON -->
        <link rel="icon" href="img/homeadmin.png" type="image/gif" sizes="16x16">
        <!--/ NAV ICON -->

        <script src="js/bgAnimation.js"></script>

        <style type="text/css">
            body, html {
                background-color: #000;
                color: #fff;
                width: 100%;
                height: 100%;
                margin: 0;
                padding: 0;
                overflow: hidden;
            }
            canvas {
                position:absolute;
                top:0;
                left:0
            }
        </style>

        <title>Aleixo Home Server Admin</title>
        
    </head>
    <body>
        <!-- NAVBAR -->
        <nav class="uk-navbar-container uk-navbar-transparent uk-margin" uk-navbar="mode: click" style="background-color: #010D26">
            <div class="uk-navbar-left">

                <ul class="uk-navbar-nav">
                    <li class="uk-active"><a href="#">ALEIXO HOME SERVER ADMIN</a></li>
                    <li>
                        <a href="#">Manage</a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-active"><a href="#">Links</a></li>
                                <li><a href="#">Add System link</a></li>
                                <li><a href="#">Remove ystem link</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#">Quick access</a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-active"><a href="#">Systems</a></li>
                                <li><a href="#">Syspass</a></li>
                                <li><a href="#">Pi-Hole</a></li>
                                <li><a href="#">opnSENSE</a></li>
                                <li><a href="#">Proxmox</a></li>
                                <li><a href="#">Zentyal</a></li>
                                <li><a href="#">ODOO</a></li>
                                <li><a href="#">Zabbix</a></li>
                                <li><a href="#"></a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav">
                    <li>
                        <a href="#">USER</a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-active"><a href="#">aleixo1lucass@gmail.com</a></li>
                                <li><a href="#">Quit</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!--/NAVBAR -->

        <!-- DIVIDER -->
        <hr class="uk-divider-icon">
        <!--/ DIVIDER -->


        <!-- GRID -->
        <div class="uk-grid-column-small uk-grid-row-large uk-child-width-1-3@s uk-text-center" uk-grid>
            <div>
                <div class="uk-card uk-card-default" style="background-color: #022873">
                    <div class="uk-child-width-expand@s" uk-grid>
                        <div align="left">
                            <div class="uk-card">
                                <img src="img/syspass.png" width="100" height="100" alt=""/>
                                &nbsp; <a href="ssh://aleixohome@10.11.12.26">Syspass</a>
                            </div>
                        </div>
                        <div align="right">
                            <a href="http://10.11.12.26/syspass" target="_blank" class="uk-button-text"><button style="background-color: #010D26" class="uk-button uk-height-1-1 uk-width-1-2">GO</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default" style="background-color: #022873">
                    <div class="uk-child-width-expand@s" uk-grid>
                        <div align="left">
                            <div class="uk-card">
                                <img src="img/pihole.png" width="100" height="100" alt=""/>
                                &nbsp; <a href="ssh://aleixohome@10.11.12.26">Pi-Hole DNS</a>
                            </div>
                        </div>
                        <div align="right">
                            <a href="http://10.11.12.26/admin" target="_blank" class="uk-button-text"><button style="background-color: #010D26" class="uk-button uk-height-1-1 uk-width-1-2">GO</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default" style="background-color: #022873">
                    <div class="uk-child-width-expand@s" uk-grid>
                        <div align="left">
                            <div class="uk-card">
                                <img src="img/opnsense.png" width="100" height="100" alt=""/>
                                &nbsp; <a href="ssh://root@10.11.12.22">opnSENSE Firewall</a>
                            </div>
                        </div>
                        <div align="right">
                            <a href="https://10.11.12.22" target="_blank" class="uk-button-text"><button style="background-color: #010D26" class="uk-button uk-height-1-1 uk-width-1-2">GO</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default" style="background-color: #022873">
                    <div class="uk-child-width-expand@s" uk-grid>
                        <div align="left">
                            <div class="uk-card">
                                <img src="img/proxmox.png" width="100" height="100" alt=""/>
                                &nbsp; <a href="ssh://root@10.11.12.28">Proxmox Server</a>
                            </div>
                        </div>
                        <div align="right">
                            <a href="https://10.11.12.28:8006" target="_blank" class="uk-button-text"><button style="background-color: #010D26" class="uk-button uk-height-1-1 uk-width-1-2">GO</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default" style="background-color: #022873">
                    <div class="uk-child-width-expand@s" uk-grid>
                        <div align="left">
                            <div class="uk-card">
                                <img src="img/zentyal.png" width="100" height="100" alt=""/>
                                &nbsp; <a href="ssh://aleixohome@10.11.12.25">Zentyal Server</a>
                            </div>
                        </div>
                        <div align="right">
                            <a href="https://10.11.12.25:8443/" target="_blank" class="uk-button-text"><button style="background-color: #010D26" class="uk-button uk-height-1-1 uk-width-1-2">GO</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default" style="background-color: #022873">
                    <div class="uk-child-width-expand@s" uk-grid>
                        <div align="left">
                            <div class="uk-card">
                                <img src="img/odoo.png" width="100" height="100" alt=""/>
                                &nbsp; <a href="ssh://aleixohome@10.11.12.26">Odoo Admin</a>
                            </div>
                        </div>
                        <div align="right">
                            <a href="http://10.11.12.26:8069/" target="_blank" class="uk-button-text"><button style="background-color: #010D26" class="uk-button uk-height-1-1 uk-width-1-2">GO</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default" style="background-color: #022873">
                    <div class="uk-child-width-expand@s" uk-grid>
                        <div align="left">
                            <div class="uk-card">
                                <img src="img/zabbix.png" width="100" height="100" alt=""/>
                                &nbsp; <a href="ssh://10.11.12.24">Zabbix Dashboard</a>
                            </div>
                        </div>
                        <div align="right">
                            <a href="http://10.11.12.24" target="_blank" class="uk-button-text"><button style="background-color: #010D26" class="uk-button uk-height-1-1 uk-width-1-2">GO</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default" style="background-color: #022873">
                    <div class="uk-child-width-expand@s" uk-grid>
                        <div align="left">
                            <div class="uk-card">
                                <img src="img/duplicati.png" width="100" height="100" alt=""/>
                                &nbsp; <a>Duplicati Backup</a>
                            </div>
                        </div>
                        <div align="right">
                            <a href="http://localhost:8200" target="_blank" class="uk-button-text"><button style="background-color: #010D26" class="uk-button uk-height-1-1 uk-width-1-2">GO</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default" style="background-color: #022873">
                    <div class="uk-child-width-expand@s" uk-grid>
                        <div align="left">
                            <div class="uk-card">
                                <img src="img/aleixodev.png" width="100" height="100" alt=""/>
                                &nbsp; <a href="ssh://10.11.12.26">Aleixo.Dev Site</a>
                            </div>
                        </div>
                        <div align="right">
                            <a href="http://10.11.12.26/AleixoDev/" target="_blank" class="uk-button-text"><button style="background-color: #010D26" class="uk-button uk-height-1-1 uk-width-1-2">GO</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ GRID -->

        <!-- DIVIDER -->
        <hr class="uk-divider-icon">
        <!--/ DIVIDER -->

        <!--/ FOOTER -->
        <footer style="bottom: 0; position: fixed; width: 100%">
            <div class="uk-card uk-card-default" style="z-index: 980; background-color: #010D26" uk-sticky="bottom: 0">aleixo1lucas@gmail.com</div>
        </footer>
        <!--/ FOOTER -->
    </body>
</html>
