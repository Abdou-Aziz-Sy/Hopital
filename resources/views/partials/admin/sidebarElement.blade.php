<div class="container-fluid">
    <div class="row">
        <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
            <div class="offcanvas-lg offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
                aria-labelledby="sidebarMenuLabel">
                <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page"
                                href="{{ url('admin') }}">
                                <svg class="bi">
                                    <use xlink:href="#house-fill" />
                                </svg>
                                Tableau de Bord
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" href="{{ url('/hopital') }}">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-hospital" viewBox="0 0 16 16">
                                    <path
                                        d="M8.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1zM13.25 9a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25zM13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zm.25 1.75a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25zm-11-4a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 3 9.75v-.5A.25.25 0 0 0 2.75 9zm0 2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25zM2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25z" />
                                    <path
                                        d="M5 1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 1 1v4h3a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3V3a1 1 0 0 1 1-1zm2 14h2v-3H7zm3 0h1V3H5v12h1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1zm0-14H6v1h4zm2 7v7h3V8zm-8 7V8H1v7z" />
                                </svg> Hopital
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" href="{{ url('/gestiondoctor') }}">
                                <svg class="bi">
                                    <use xlink:href="#people" />
                                </svg>
                                Gestion des Médecins
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" href="{{ url('assist') }}">

                                <?xml version="1.0" encoding="iso-8859-1"?>
                                <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                <svg fill="#0d6efd" height="16" width="16" version="1.1" id="Capa_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 463 463" xml:space="preserve">
                                    <g>
                                        <path d="M376.055,309.815l-71.413-22.316c-7.856-2.455-16.552-13.721-17.545-26.578C320.483,237.484,343,193.628,343,143.5v-44
		c0-24.698-11.992-49.823-32.901-68.934C288.532,10.855,260.618,0,231.5,0s-57.032,10.855-78.599,30.566
		C131.992,49.677,120,74.802,120,99.5v44c0,50.177,22.56,94.071,56,117.49v2.513c0,11.056-7.09,20.698-17.642,23.996l-71.413,22.316
		C63.651,317.095,48,338.384,48,362.789V439.5c0,12.958,10.542,23.5,23.5,23.5h320c12.958,0,23.5-10.542,23.5-23.5v-76.711
		C415,338.384,399.349,317.095,376.055,309.815z M159.5,144h-23.645c0.574-3.029,1.881-6.049,3.87-9h183.55
		c1.99,2.951,3.296,5.971,3.87,9H303.5c-4.143,0-7.5,3.357-7.5,7.5v16c0,0.275-0.225,0.5-0.5,0.5h-36.687
		c-0.132,0-0.26-0.054-0.353-0.146l-16-16c-6.045-6.043-15.877-6.043-21.922,0l-16,16c-0.093,0.093-0.221,0.146-0.353,0.146H167.5
		c-0.275,0-0.5-0.225-0.5-0.5v-16C167,147.357,163.643,144,159.5,144z M156.964,120c1.508-0.877,3.067-1.739,4.717-2.567
		C180.206,108.125,205.001,103,231.5,103s51.294,5.125,69.818,14.433c1.65,0.829,3.209,1.69,4.717,2.567H156.964z M135.796,159H152
		v8.5c0,8.547,6.953,15.5,15.5,15.5h36.687c4.14,0,8.032-1.612,10.96-4.539l16-16c0.193-0.195,0.514-0.195,0.707,0l16,16
		c2.928,2.927,6.82,4.539,10.96,4.539H295.5c8.547,0,15.5-6.953,15.5-15.5V159h16.204c-0.964,9.334-2.791,18.335-5.371,26.879
		l-43.824,17.394l-37.252-15.965c-5.884-2.521-12.633-2.521-18.515,0L185.23,203.17l-44.132-17.516
		C138.555,177.177,136.752,168.252,135.796,159z M183,247.639v-21.59c0-3.404,2.022-6.471,5.151-7.813l40.002-17.143
		c2.126-0.913,4.567-0.911,6.695,0l39.999,17.143c3.13,1.342,5.152,4.408,5.152,7.813v21.59C265.741,258.034,249.169,264,231.5,264
		S197.259,258.034,183,247.639z M295,234.156v-8.106c0-4.347-1.205-8.487-3.34-12.057l22.825-9.06
		C309.25,215.917,302.66,225.779,295,234.156z M163.021,41.639C181.816,24.461,206.136,15,231.5,15s49.684,9.461,68.479,26.639
		C317.787,57.914,328,79.004,328,99.5v18.162C309.054,99.799,273.321,88,231.5,88s-77.554,11.799-96.5,29.662V99.5
		C135,79.004,145.213,57.914,163.021,41.639z M148.399,204.689l23.038,9.144c-2.196,3.606-3.437,7.805-3.437,12.217v8.106
		C160.283,225.717,153.652,215.771,148.399,204.689z M231.5,279c14.783,0,28.9-3.523,41.821-9.9
		c0.683,2.848,1.623,5.708,2.805,8.495C263.388,284.32,247.672,288,231.5,288c-15.627,0-30.795-3.436-43.291-9.727
		c1.095-2.784,1.885-5.712,2.338-8.741C203.231,275.64,217.049,279,231.5,279z M180.157,290.997
		C194.987,298.753,213.029,303,231.5,303c18.894,0,37.377-4.45,52.395-12.558c3.585,4.281,7.902,7.811,12.836,10.052
		C284.703,317.003,259.308,328,231.5,328c-27.777,0-53.148-10.972-65.193-27.451C171.655,298.331,176.344,295.052,180.157,290.997z
		 M63,439.5v-76.711c0-17.81,11.421-33.345,28.42-38.657l60.086-18.777c7.059,11.605,18.613,21.161,32.894,27.742
		c-0.256,0.755-0.4,1.562-0.4,2.403V448H71.5C66.813,448,63,444.187,63,439.5z M400,439.5c0,4.687-3.813,8.5-8.5,8.5H199V338.501
		c10.115,2.912,21.098,4.499,32.5,4.499c35.033,0,66.154-14.893,79.994-37.645l60.086,18.777
		c16.999,5.313,28.42,20.848,28.42,38.657V439.5z" />
                                        <path d="M215.5,352c-1.98,0-3.91,0.8-5.3,2.2c-1.4,1.39-2.2,3.319-2.2,5.3c0,1.979,0.8,3.91,2.2,5.3c1.39,1.4,3.319,2.2,5.3,2.2
		c1.979,0,3.91-0.8,5.3-2.2c1.4-1.39,2.2-3.33,2.2-5.3c0-1.98-0.8-3.91-2.2-5.3C219.41,352.8,217.479,352,215.5,352z" />
                                        <path d="M215.5,384c-1.98,0-3.91,0.8-5.3,2.2c-1.4,1.39-2.2,3.319-2.2,5.3c0,1.97,0.8,3.899,2.2,5.3c1.39,1.4,3.33,2.2,5.3,2.2
		s3.899-0.8,5.3-2.2c1.4-1.39,2.2-3.33,2.2-5.3c0-1.98-0.8-3.91-2.2-5.3C219.41,384.8,217.479,384,215.5,384z" />
                                        <path d="M215.5,416c-1.98,0-3.91,0.8-5.3,2.2c-1.4,1.39-2.2,3.33-2.2,5.3s0.8,3.91,2.2,5.3c1.39,1.4,3.319,2.2,5.3,2.2
		c1.97,0,3.91-0.8,5.3-2.2c1.4-1.39,2.2-3.33,2.2-5.3s-0.8-3.91-2.2-5.3C219.41,416.8,217.47,416,215.5,416z" />
                                    </g>
                                </svg>
                                Gestion des assistants
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" href="{{ url('adminDossier') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-folder" viewBox="0 0 16 16">
                                    <path
                                        d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a2 2 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139q.323-.119.684-.12h5.396z" />
                                </svg>
                                Dossiers
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" href="{{ url('Rv') }}">
                                <svg class="bi">
                                    <use xlink:href="#puzzle" />
                                </svg>
                                Rendez Vous
                            </a>
                        </li>
                    </ul>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>



                    <hr class="my-3">

                    <ul class="nav flex-column mb-auto">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" href="#">
                                <svg class="bi">
                                    <use xlink:href="#gear-wide-connected" />
                                </svg>
                                Paramètres
                            </a>
                        </li>
                        <li class="nav-item">
                            <form method="POST" action="{{ url('/logout') }}">
                                @csrf
                                <button class="nav-link d-flex align-items-center gap-2" href="#">
                                    <svg class="bi">
                                        <use xlink:href="#door-closed" />
                                    </svg>
                                    Se Déconnecter
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>