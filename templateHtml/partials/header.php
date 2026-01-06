        <!-- Navbar (alto + espacioso + dropdown) -->
        <nav
          id="mainNavbar"
          class="navbar navbar-expand-lg navbar-modern sticky-top has-mega">
          <div class="container">
            <a
              class="navbar-brand d-flex align-items-center"
              href="#home"
              aria-label="GEPETROL SEGUROS – Cotización de pólizas">

              <img
                src="<?= asset('img/logo-gepetrol-green.png') ?>"
                alt="GEPETROL SEGUROS – Cotización de pólizas"
                class="brand-logo"
                width="90"
                height="75"
                loading="eager"
                decoding="async" />
            </a>

            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#mainNav">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNav">
              <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                <li class="nav-item">
                  <a class="nav-link" href="<?= url('index.php') ?>">Inicio</a>
                </li>

                <!-- Submenu: Quiénes somos -->
                <li class="nav-item dropdown dropdown-hover dropdown-mega">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Quiénes somos
                  </a>

                  <div class="dropdown-menu dropdown-menu-mega">
                    <div class="container">
                      <div class="row g-4">
                        <!-- Columna 1 -->
                        <div class="col-lg-6">
                          <div class="mega-section">
                            <h6 class="mega-title">
                              <i class="bi bi-building"></i> La empresa
                            </h6>

                            <a href="<?= url('pages/mensaje-director.php') ?>" class="mega-link">
                              <i class="bi bi-person-badge"></i>
                              <div>
                                <span>Mensaje del Director General</span>
                                <small>Visión, compromiso y liderazgo</small>
                              </div>
                            </a>

                            <a href="<?= url('pages/nuestra-historia.php') ?>" class="mega-link">
                              <i class="bi bi-clock-history"></i>
                              <div>
                                <span>Nuestra historia</span>
                                <small>Evolución y crecimiento institucional</small>
                              </div>
                            </a>

                            <a href="<?= url('pages/quienes-somos.php') ?>" class="mega-link">
                              <i class="bi bi-award"></i>
                              <div>
                                <span>Misión y valores</span>
                                <small>Principios que nos definen</small>
                              </div>
                            </a>
                          </div>
                        </div>

                        <!-- Columna 2 -->
                        <div class="col-lg-6">
                          <div class="mega-section">
                            <h6 class="mega-title">
                              <i class="bi bi-people"></i> Nuestro equipo
                            </h6>

                            <a href="<?= url('pages/estructura-organizativa.php') ?>" class="mega-link">
                              <i class="bi bi-diagram-3"></i>
                              <div>
                                <span>Estructura organizativa</span>
                                <small>Áreas y departamentos</small>
                              </div>
                            </a>

                            <a href="#" class="mega-link">
                              <i class="bi bi-shield-check"></i>
                              <div>
                                <span>Gobernanza & Cumplimiento</span>
                                <small>Buenas prácticas y control</small>
                              </div>
                            </a>

                            <a href="<?= url('pages/trabaja-con-nosotros.php') ?>" class="mega-link">
                              <i class="bi bi-briefcase"></i>
                              <div>
                                <span>Trabaja con nosotros</span>
                                <small>Oportunidades profesionales</small>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>

                      <!-- CTA inferior -->
                      <div class="mega-footer">
                        <a href="#presupuesto" class="btn btn-brand btn-sm">
                          <i class="bi bi-send"></i> Solicitar presupuesto
                        </a>
                        <a href="#" class="btn btn-outline-secondary btn-sm">
                          Ver toda la empresa
                        </a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="<?= url('pages/seguro-automovil.php') ?>">Seguro Automóvil</a>
                </li>

                <li class="nav-item dropdown dropdown-hover dropdown-mega">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Productos
                  </a>

                  <div class="dropdown-menu dropdown-menu-mega">
                    <div class="container">
                      <div class="row g-4">
                        <!-- PARTICULARES -->
                        <div class="col-lg-6">
                          <div class="mega-section">
                            <h6 class="mega-title">
                              <i class="bi bi-person"></i> PARTICULARES
                            </h6>

                            <a href="<?= url('pages/particulares.php') ?>" class="mega-link">
                              <i class="bi bi-car-front"></i>
                              <div>
                                <span>Seguro automóvil</span>
                                <small>Cotiza rápido y transparente</small>
                              </div>
                            </a>

                            <a href="<?= url('pages/particulares.php') ?>" class="mega-link">
                              <i class="bi bi-exclamation-triangle"></i>
                              <div>
                                <span>Seguro individual accidente</span>
                                <small>Protección ante imprevistos</small>
                              </div>
                            </a>

                            <a href="<?= url('pages/particulares.php') ?>" class="mega-link">
                              <i class="bi bi-heart-pulse"></i>
                              <div>
                                <span>Seguro médico familiar</span>
                                <small>Planes adaptados a tu familia</small>
                              </div>
                            </a>

                            <a href="<?= url('pages/particulares.php') ?>" class="mega-link">
                              <i class="bi bi-shop"></i>
                              <div>
                                <span>Multirriesgo Pymes & Comerciantes</span>
                                <small>Incidentes, daños y cobertura integral</small>
                              </div>
                            </a>

                            <a href="<?= url('pages/particulares.php') ?>" class="mega-link">
                              <i class="bi bi-truck"></i>
                              <div>
                                <span>Transporte de mercancías</span>
                                <small>Cobertura durante el traslado</small>
                              </div>
                            </a>

                            <a href="<?= url('pages/particulares.php') ?>" class="mega-link">
                              <i class="bi bi-shield-lock"></i>
                              <div>
                                <span>Cuenta protegida</span>
                                <small>Más seguridad financiera</small>
                              </div>
                            </a>

                            <a href="<?= url('pages/particulares.php') ?>" class="mega-link">
                              <i class="bi bi-fire"></i>
                              <div>
                                <span>Incendio y riesgos anexos</span>
                                <small>Protección del hogar y bienes</small>
                              </div>
                            </a>
                          </div>
                        </div>

                        <!-- EMPRESAS -->
                        <div class="col-lg-6">
                          <div class="mega-section">
                            <h6 class="mega-title">
                              <i class="bi bi-briefcase"></i> EMPRESAS
                            </h6>

                            <a href="<?= url('pages/empresas.php') ?>" class="mega-link">
                              <i class="bi bi-shield-check"></i>
                              <div>
                                <span>RC jefe de empresa</span>
                                <small>Responsabilidad civil profesional</small>
                              </div>
                            </a>

                            <a href="<?= url('pages/empresas.php') ?>" class="mega-link">
                              <i class="bi bi-building-check"></i>
                              <div>
                                <span>Daños globales</span>
                                <small>Protección integral de activos</small>
                              </div>
                            </a>

                            <a href="<?= url('pages/empresas.php') ?>" class="mega-link">
                              <i class="bi bi-hospital"></i>
                              <div>
                                <span>Seguro médico grupo</span>
                                <small>Cobertura para equipos y empleados</small>
                              </div>
                            </a>

                            <a href="<?= url('pages/empresas.php') ?>" class="mega-link">
                              <i class="bi bi-mortarboard"></i>
                              <div>
                                <span>RC escolar</span>
                                <small>Protección para centros educativos</small>
                              </div>
                            </a>

                            <a href="<?= url('pages/empresas.php') ?>" class="mega-link">
                              <i class="bi bi-briefcase-fill"></i>
                              <div>
                                <span>Multirriesgo profesional</span>
                                <small>Riesgos comerciales y operativos</small>
                              </div>
                            </a>

                            <a href="<?= url('pages/empresas.php') ?>" class="mega-link">
                              <i class="bi bi-gear"></i>
                              <div>
                                <span>Rotura de maquinaria</span>
                                <small>Equipos y maquinaria críticos</small>
                              </div>
                            </a>

                            <a href="<?= url('pages/empresas.php') ?>" class="mega-link">
                              <i class="bi bi-cone-striped"></i>
                              <div>
                                <span>Todo riesgo construcción (obras)</span>
                                <small>Obras, materiales y responsabilidad</small>
                              </div>
                            </a>

                            <a href="#productos" class="mega-link">
                              <i class="bi bi-airplane"></i>
                              <div>
                                <span>Aeronaves / barcos</span>
                                <small>Coberturas especiales de transporte</small>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>

                      <div class="mega-footer">
                        <a href="<?= url('#') ?>" class="btn btn-brand btn-sm">
                          <i class="bi bi-send"></i> Solicitar presupuesto
                        </a>
                        <a
                          href="#productos"
                          class="btn btn-outline-secondary btn-sm">
                          Ver todos los productos
                        </a>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= url('pages/videos.php') ?>">Multimedia</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= url('pages/noticias.php') ?>">Noticias</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= url('pages/contacto.php') ?>">Contacto</a>
                </li>
                <!-- <li class="nav-item">
              <a class="nav-link" href="<?= url('#') ?>">Presupuesto</a>
            </li> -->

                <li class="nav-item ms-lg-3">
                  <a class="btn btn-brand btn-lg px-4" href="<?= url('#') ?>">
                    <i class="bi bi-calculator"></i> Cotizar ahora
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>