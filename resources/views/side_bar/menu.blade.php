<div class="menu">
    <ul class="list">
        <li class="header">SERVICE DOCUMENTATION-ENAM</li>
        <li class="active">
            <a href='{!! url('#')!!}'>

                <i class="material-icons">home</i>
                <span>Accueil</span>
            </a>
        </li>

       <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">assignment</i>
                <span>OUVRAGES</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="{{ url('domaines') }}" class="mce-menu-item">
                        <i class="material-icons">domain</i><span>DOMAINES</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('sousdomaines') }}" class="mce-menu-item">
                        <i class="material-icons">folder</i><span>SOUS-DOMAINES</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('categories') }}" class="mce-menu-item">
                        <i class="material-icons">class</i><span>TYPE-OUVRAGES</span>
                    </a>
                </li>
                <!--<li>
                    <a href="{{ url('Auteurs') }}"  class="mce-menu-item">
                        <i class="material-icons">people</i><span>AUTEURS</span>
                    </a>

                </li>-->
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">insert_drive_file</i>
                        <span>DOCUMENTS</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="/documents?cat=4">
                                <span>Livres</span>
                            </a>
                        </li>
                        <li>
                        <a href="/documents?cat=1">
                                <span>Memoires</span>
                            </a>
                        </li>
                        <li>
                            <a href="/documents?cat=2">
                                <span>Periodiques et Revues</span>
                            </a>
                        </li>
                        <li>
                            <a href="/documents?cat=3">
                                <span>Textes et decrets</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('documents') }}">
                                <span>Toutes</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="{{ url('choixfiches') }}" class="mce-menu-item">
                        <i class="material-icons">payment</i><span>FICHES CAT.</span>
                    </a>
                </li>
            </ul>
        </li><li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">local_grocery_store</i>
                <span>MOUVEMENTS D'OUVRAGES</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="{{ url('Consultations') }}" class="mce-menu-item">
                        <i class="material-icons">import_contacts</i><span>CONSULTATIONS</span>
                    </a>

                </li>
                <li>
                    <a href="{{url('Emprunts')}}" class="mce-menu-item">
                        <i class="material-icons">transfer_within_a_station</i><span>EMPRUNTS</span>
                    </a>

                </li>

            </ul>
        </li>

        <!--
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">computer</i>
                <span>ADMINISTRATION</span>
            </a>
            <ul class="ml-menu">


                <li>
                    <a href="{!! url('#') !!}" class="mce-menu-item">
                        <i class="material-icons">account_circle</i> <span>UTILISATEURS</span>
                    </a>

                </li>
                <li>
                    <a href="{!! url('#') !!}" class="mce-menu-item">
                        <i class="material-icons">person</i>  <span>PROFILS</span>
                    </a>

                </li>


            </ul>
        </li>
        -->

        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">pie_chart</i>
                <span>STATISTIQUES</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">dehaze</i>
                        <span>ETATS-FOND</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{!! url('ouvragecategories') !!}">
                                <span>Par Categories</span>
                            </a>
                        </li>
                        <li>
                            <a href="{!! url('ouvragesousdomaines') !!}">
                                <span>Par Sous-Domaines</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="mce-menu-item">
                        <i class="material-icons">nature_people</i><span>VEDETTES-AUTEURS</span>
                    </a>

                </li>
                <li>
                    <a href="javascript:void(0);" class="mce-menu-item">
                        <i class="material-icons">content_paste</i> <span>VEDETTES-MATIERES</span>
                    </a>

                </li>


            </ul>
        </li>

        <!--
        <li class="header">AUTRES</li>
        <li>
            <a href="{!! url('information') !!}">
                <i class="material-icons col-red">donut_large</i>
                <span>Important</span>
            </a>
        </li>
        <li>
            <a href="{!! url('planete') !!}">
                <i class="material-icons col-amber">donut_large</i>
                <span>Planete</span>
            </a>
        </li>

        <li>
            <a href="{!! url('important') !!}">
                <i class="material-icons col-light-blue">donut_large</i>
                <span>Information</span>
            </a>
        </li>
        -->
    </ul>
</div>