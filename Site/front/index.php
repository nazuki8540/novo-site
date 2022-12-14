
<?php 

require_once('header.php');
require_once('menu.php');
require_once('../config/query.php');
require_once('../config/sessions.php');
?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
<?php
require_once('nav.php');
require_once('../inc/mensagens.php');
?>
          

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-8 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Parabens <?= $nomeProprietario; ?>! 🎉</h5>
                          <p class="mb-4">
                            Aqui onde você encontra suas movimentações, adiciona itens ao seu cardápio,e mais um pouco! Mas <b>primeiro</b> vamos configurar sua conta!
                          </p>

                          <a href="perfil.php" class="btn btn-sm btn-outline-primary">Configurar conta</a>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img src="../assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 order-1">
                  <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img src="../assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded">
                            </div>
                            <box-icon name='low-vision'></box-icon>
                            <div class="dropdown">
                              <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">Ver mais</a>
                                <a class="dropdown-item" href="javascript:void(0);">Ocultar</a>
                              </div>
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Total de vendas</span>
                          <h3 class="card-title mb-2"><?= $totalVendas; ?></h3>
                          <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img src="../assets/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded">
                            </div>
                            <div class="dropdown">
                              <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                <a class="dropdown-item" href="javascript:void(0);">Ver mais</a>
                                <a class="dropdown-item" href="javascript:void(0);">Ocultar</a>
                              </div>
                            </div>
                          </div>
                          <span>Valores</span>
                          <h3 class="card-title text-nowrap mb-1"><?= $valorVendas; ?></h3>
                          <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                  <div class="row">
                    <div class="col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded">
                            </div>
                            <div class="dropdown">
                              <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                              </div>
                            </div>
                          </div>
                          <span class="d-block mb-1">Payments</span>
                          <h3 class="card-title text-nowrap mb-2">$2,456</h3>
                          <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img src="../assets/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded">
                            </div>
                            <div class="dropdown">
                              <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                              </div>
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Transactions</span>
                          <h3 class="card-title mb-2">$14,857</h3>
                          <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.14%</small>
                        </div>
                      </div>
                    </div>
                    <!-- </div>
    <div class="row"> -->
                    <div class="col-12 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex justify-content-between flex-sm-row flex-column gap-3" style="position: relative;">
                            <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                              <div class="card-title">
                                <h5 class="text-nowrap mb-2">Profile Report</h5>
                                <span class="badge bg-label-warning rounded-pill">Year 2021</span>
                              </div>
                              <div class="mt-sm-auto">
                                <small class="text-success text-nowrap fw-semibold"><i class="bx bx-chevron-up"></i> 68.2%</small>
                                <h3 class="mb-0">$84,686k</h3>
                              </div>
                            </div>
                            <div id="profileReportChart" style="min-height: 80px;"><div id="apexchartsplpn6613" class="apexcharts-canvas apexchartsplpn6613 apexcharts-theme-light" style="width: 144px; height: 80px;"><svg id="SvgjsSvg1704" width="144" height="80" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1706" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1705"><clipPath id="gridRectMaskplpn6613"><rect id="SvgjsRect1711" width="145" height="85" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskplpn6613"></clipPath><clipPath id="nonForecastMaskplpn6613"></clipPath><clipPath id="gridRectMarkerMaskplpn6613"><rect id="SvgjsRect1712" width="140" height="84" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><filter id="SvgjsFilter1718" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood1719" flood-color="#ffab00" flood-opacity="0.15" result="SvgjsFeFlood1719Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite1720" in="SvgjsFeFlood1719Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1720Out"></feComposite><feOffset id="SvgjsFeOffset1721" dx="5" dy="10" result="SvgjsFeOffset1721Out" in="SvgjsFeComposite1720Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur1722" stdDeviation="3 " result="SvgjsFeGaussianBlur1722Out" in="SvgjsFeOffset1721Out"></feGaussianBlur><feMerge id="SvgjsFeMerge1723" result="SvgjsFeMerge1723Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode1724" in="SvgjsFeGaussianBlur1722Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode1725" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend1726" in="SourceGraphic" in2="SvgjsFeMerge1723Out" mode="normal" result="SvgjsFeBlend1726Out"></feBlend></filter></defs><line id="SvgjsLine1710" x1="81.1" y1="0" x2="81.1" y2="80" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="81.1" y="0" width="1" height="80" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1727" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1728" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1736" class="apexcharts-grid"><g id="SvgjsG1737" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1739" x1="0" y1="0" x2="136" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1740" x1="0" y1="20" x2="136" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1741" x1="0" y1="40" x2="136" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1742" x1="0" y1="60" x2="136" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1743" x1="0" y1="80" x2="136" y2="80" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1738" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1745" x1="0" y1="80" x2="136" y2="80" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1744" x1="0" y1="1" x2="0" y2="80" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1713" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1714" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1717" d="M 0 76C 9.52 76 17.68 12 27.2 12C 36.72 12 44.879999999999995 62 54.4 62C 63.919999999999995 62 72.08 22 81.6 22C 91.11999999999999 22 99.28 38 108.8 38C 118.32 38 126.48 6 136 6" fill="none" fill-opacity="1" stroke="rgba(255,171,0,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskplpn6613)" filter="url(#SvgjsFilter1718)" pathTo="M 0 76C 9.52 76 17.68 12 27.2 12C 36.72 12 44.879999999999995 62 54.4 62C 63.919999999999995 62 72.08 22 81.6 22C 91.11999999999999 22 99.28 38 108.8 38C 118.32 38 126.48 6 136 6" pathFrom="M -1 120L -1 120L 27.2 120L 54.4 120L 81.6 120L 108.8 120L 136 120"></path><g id="SvgjsG1715" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1751" r="0" cx="81.6" cy="22" class="apexcharts-marker w62qg29gt no-pointer-events" stroke="#ffffff" fill="#ffab00" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1716" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1746" x1="0" y1="0" x2="136" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1747" x1="0" y1="0" x2="136" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1748" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1749" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1750" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1709" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1735" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1707" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 40px;"></div><div class="apexcharts-tooltip apexcharts-theme-light" style="left: -20px; top: 25px;"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">4</div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 171, 0);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">series-1: </span><span class="apexcharts-tooltip-text-y-value">245</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                          <div class="resize-triggers"><div class="expand-trigger"><div style="width: 283px; height: 117px;"></div></div><div class="contract-trigger"></div></div></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <!-- Order Statistics -->
                <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                      <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Order Statistics</h5>
                        <small class="text-muted">42.82k Total Sales</small>
                      </div>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                          <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                          <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                          <a class="dropdown-item" href="javascript:void(0);">Share</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center mb-3" style="position: relative;">
                        <div class="d-flex flex-column align-items-center gap-1">
                          <h2 class="mb-2">8,258</h2>
                          <span>Total Orders</span>
                        </div>
                        <div id="orderStatisticsChart" style="min-height: 137.55px;"><div id="apexchartspz94q6dh" class="apexcharts-canvas apexchartspz94q6dh apexcharts-theme-light" style="width: 130px; height: 137.55px;"><svg id="SvgjsSvg1752" width="130" height="137.55" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1754" class="apexcharts-inner apexcharts-graphical" transform="translate(-7, 0)"><defs id="SvgjsDefs1753"><clipPath id="gridRectMaskpz94q6dh"><rect id="SvgjsRect1756" width="150" height="173" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskpz94q6dh"></clipPath><clipPath id="nonForecastMaskpz94q6dh"></clipPath><clipPath id="gridRectMarkerMaskpz94q6dh"><rect id="SvgjsRect1757" width="145" height="172" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1758" class="apexcharts-pie"><g id="SvgjsG1759" transform="translate(0, 0) scale(1)"><circle id="SvgjsCircle1760" r="44.835365853658544" cx="70.5" cy="70.5" fill="transparent"></circle><g id="SvgjsG1761" class="apexcharts-slices"><g id="SvgjsG1762" class="apexcharts-series apexcharts-pie-series" seriesName="Electronic" rel="1" data:realIndex="0"><path id="SvgjsPath1763" d="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z" fill="rgba(105,108,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="153" data:startAngle="0" data:strokeWidth="5" data:value="85" data:pathOrig="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z" stroke="#ffffff"></path></g><g id="SvgjsG1764" class="apexcharts-series apexcharts-pie-series" seriesName="Sports" rel="2" data:realIndex="1"><path id="SvgjsPath1765" d="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z" fill="rgba(133,146,163,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="27" data:startAngle="153" data:strokeWidth="5" data:value="15" data:pathOrig="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z" stroke="#ffffff"></path></g><g id="SvgjsG1766" class="apexcharts-series apexcharts-pie-series" seriesName="Decor" rel="3" data:realIndex="2"><path id="SvgjsPath1767" d="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z" fill="rgba(3,195,236,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="90" data:startAngle="180" data:strokeWidth="5" data:value="50" data:pathOrig="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z" stroke="#ffffff"></path></g><g id="SvgjsG1768" class="apexcharts-series apexcharts-pie-series" seriesName="Fashion" rel="4" data:realIndex="3"><path id="SvgjsPath1769" d="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z" fill="rgba(113,221,55,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-3" index="0" j="3" data:angle="90" data:startAngle="270" data:strokeWidth="5" data:value="50" data:pathOrig="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z" stroke="#ffffff"></path></g></g></g><g id="SvgjsG1770" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"><text id="SvgjsText1771" font-family="Helvetica, Arial, sans-serif" x="70.5" y="90.5" text-anchor="middle" dominant-baseline="auto" font-size="0.8125rem" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Helvetica, Arial, sans-serif;">Weekly</text><text id="SvgjsText1772" font-family="Public Sans" x="70.5" y="71.5" text-anchor="middle" dominant-baseline="auto" font-size="1.5rem" font-weight="400" fill="#566a7f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: &quot;Public Sans&quot;;">38%</text></g></g><line id="SvgjsLine1773" x1="0" y1="0" x2="141" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1774" x1="0" y1="0" x2="141" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1755" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-dark"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(105, 108, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(133, 146, 163);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(3, 195, 236);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 4;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(113, 221, 55);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                      <div class="resize-triggers"><div class="expand-trigger"><div style="width: 283px; height: 139px;"></div></div><div class="contract-trigger"></div></div></div>
                      <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-mobile-alt"></i></span>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Electronic</h6>
                              <small class="text-muted">Mobile, Earbuds, TV</small>
                            </div>
                            <div class="user-progress">
                              <small class="fw-semibold">82.5k</small>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-success"><i class="bx bx-closet"></i></span>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Fashion</h6>
                              <small class="text-muted">T-shirt, Jeans, Shoes</small>
                            </div>
                            <div class="user-progress">
                              <small class="fw-semibold">23.8k</small>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-info"><i class="bx bx-home-alt"></i></span>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Decor</h6>
                              <small class="text-muted">Fine Art, Dining</small>
                            </div>
                            <div class="user-progress">
                              <small class="fw-semibold">849k</small>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex">
                          <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-secondary"><i class="bx bx-football"></i></span>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Sports</h6>
                              <small class="text-muted">Football, Cricket Kit</small>
                            </div>
                            <div class="user-progress">
                              <small class="fw-semibold">99</small>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Order Statistics -->

                <!-- Expense Overview -->
                <div class="col-md-6 col-lg-4 order-1 mb-4">
                  <div class="card h-100">
                    <div class="card-header">
                      <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item">
                          <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-tabs-line-card-income" aria-controls="navs-tabs-line-card-income" aria-selected="true">
                            Income
                          </button>
                        </li>
                        <li class="nav-item">
                          <button type="button" class="nav-link" role="tab">Expenses</button>
                        </li>
                        <li class="nav-item">
                          <button type="button" class="nav-link" role="tab">Profit</button>
                        </li>
                      </ul>
                    </div>
                    <div class="card-body px-0">
                      <div class="tab-content p-0">
                        <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel" style="position: relative;">
                          <div class="d-flex p-4 pt-3">
                            <div class="avatar flex-shrink-0 me-3">
                              <img src="../assets/img/icons/unicons/wallet.png" alt="User">
                            </div>
                            <div>
                              <small class="text-muted d-block">Total Balance</small>
                              <div class="d-flex align-items-center">
                                <h6 class="mb-0 me-1">$459.10</h6>
                                <small class="text-success fw-semibold">
                                  <i class="bx bx-chevron-up"></i>
                                  42.9%
                                </small>
                              </div>
                            </div>
                          </div>
                          <div id="incomeChart" style="min-height: 215px;"><div id="apexchartsz0prx0dqk" class="apexcharts-canvas apexchartsz0prx0dqk apexcharts-theme-light" style="width: 330px; height: 215px;"><svg id="SvgjsSvg1775" width="330" height="215" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1777" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 10)"><defs id="SvgjsDefs1776"><clipPath id="gridRectMaskz0prx0dqk"><rect id="SvgjsRect1782" width="318.635009765625" height="175.73" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskz0prx0dqk"></clipPath><clipPath id="nonForecastMaskz0prx0dqk"></clipPath><clipPath id="gridRectMarkerMaskz0prx0dqk"><rect id="SvgjsRect1783" width="340.635009765625" height="201.73" x="-14" y="-14" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1803" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1804" stop-opacity="0.5" stop-color="rgba(105,108,255,0.5)" offset="0"></stop><stop id="SvgjsStop1805" stop-opacity="0.25" stop-color="rgba(195,196,255,0.25)" offset="0.95"></stop><stop id="SvgjsStop1806" stop-opacity="0.25" stop-color="rgba(195,196,255,0.25)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1781" x1="0" y1="0" x2="0" y2="173.73" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="173.73" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1809" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1810" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1812" font-family="Helvetica, Arial, sans-serif" x="0" y="202.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1813"></tspan><title></title></text><text id="SvgjsText1815" font-family="Helvetica, Arial, sans-serif" x="44.66214425223215" y="202.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1816">Jan</tspan><title>Jan</title></text><text id="SvgjsText1818" font-family="Helvetica, Arial, sans-serif" x="89.32428850446429" y="202.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1819">Feb</tspan><title>Feb</title></text><text id="SvgjsText1821" font-family="Helvetica, Arial, sans-serif" x="133.98643275669642" y="202.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1822">Mar</tspan><title>Mar</title></text><text id="SvgjsText1824" font-family="Helvetica, Arial, sans-serif" x="178.64857700892856" y="202.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1825">Apr</tspan><title>Apr</title></text><text id="SvgjsText1827" font-family="Helvetica, Arial, sans-serif" x="223.3107212611607" y="202.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1828">May</tspan><title>May</title></text><text id="SvgjsText1830" font-family="Helvetica, Arial, sans-serif" x="267.9728655133929" y="202.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1831">Jun</tspan><title>Jun</title></text><text id="SvgjsText1833" font-family="Helvetica, Arial, sans-serif" x="312.63500976562506" y="202.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1834">Jul</tspan><title>Jul</title></text></g></g><g id="SvgjsG1837" class="apexcharts-grid"><g id="SvgjsG1838" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1840" x1="0" y1="0" x2="312.635009765625" y2="0" stroke="#eceef1" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1841" x1="0" y1="43.4325" x2="312.635009765625" y2="43.4325" stroke="#eceef1" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1842" x1="0" y1="86.865" x2="312.635009765625" y2="86.865" stroke="#eceef1" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1843" x1="0" y1="130.29749999999999" x2="312.635009765625" y2="130.29749999999999" stroke="#eceef1" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1844" x1="0" y1="173.73" x2="312.635009765625" y2="173.73" stroke="#eceef1" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1839" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1846" x1="0" y1="173.73" x2="312.635009765625" y2="173.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1845" x1="0" y1="1" x2="0" y2="173.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1784" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1785" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1807" d="M 0 173.73L 0 112.92450000000001C 15.63175048828125 112.92450000000001 29.030393763950897 125.95425 44.662144252232146 125.95425C 60.293894740513394 125.95425 73.69253801618304 86.86500000000001 89.32428850446429 86.86500000000001C 104.95603899274553 86.86500000000001 118.35468226841517 121.611 133.98643275669642 121.611C 149.61818324497767 121.611 163.01682652064733 34.74600000000001 178.64857700892858 34.74600000000001C 194.28032749720984 34.74600000000001 207.67897077287947 104.238 223.31072126116072 104.238C 238.94247174944195 104.238 252.3411150251116 65.14875 267.97286551339283 65.14875C 283.6046160016741 65.14875 297.0032592773437 91.20825 312.635009765625 91.20825C 312.635009765625 91.20825 312.635009765625 91.20825 312.635009765625 173.73M 312.635009765625 91.20825z" fill="url(#SvgjsLinearGradient1803)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskz0prx0dqk)" pathTo="M 0 173.73L 0 112.92450000000001C 15.63175048828125 112.92450000000001 29.030393763950897 125.95425 44.662144252232146 125.95425C 60.293894740513394 125.95425 73.69253801618304 86.86500000000001 89.32428850446429 86.86500000000001C 104.95603899274553 86.86500000000001 118.35468226841517 121.611 133.98643275669642 121.611C 149.61818324497767 121.611 163.01682652064733 34.74600000000001 178.64857700892858 34.74600000000001C 194.28032749720984 34.74600000000001 207.67897077287947 104.238 223.31072126116072 104.238C 238.94247174944195 104.238 252.3411150251116 65.14875 267.97286551339283 65.14875C 283.6046160016741 65.14875 297.0032592773437 91.20825 312.635009765625 91.20825C 312.635009765625 91.20825 312.635009765625 91.20825 312.635009765625 173.73M 312.635009765625 91.20825z" pathFrom="M -1 217.1625L -1 217.1625L 44.662144252232146 217.1625L 89.32428850446429 217.1625L 133.98643275669642 217.1625L 178.64857700892858 217.1625L 223.31072126116072 217.1625L 267.97286551339283 217.1625L 312.635009765625 217.1625"></path><path id="SvgjsPath1808" d="M 0 112.92450000000001C 15.63175048828125 112.92450000000001 29.030393763950897 125.95425 44.662144252232146 125.95425C 60.293894740513394 125.95425 73.69253801618304 86.86500000000001 89.32428850446429 86.86500000000001C 104.95603899274553 86.86500000000001 118.35468226841517 121.611 133.98643275669642 121.611C 149.61818324497767 121.611 163.01682652064733 34.74600000000001 178.64857700892858 34.74600000000001C 194.28032749720984 34.74600000000001 207.67897077287947 104.238 223.31072126116072 104.238C 238.94247174944195 104.238 252.3411150251116 65.14875 267.97286551339283 65.14875C 283.6046160016741 65.14875 297.0032592773437 91.20825 312.635009765625 91.20825" fill="none" fill-opacity="1" stroke="#696cff" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskz0prx0dqk)" pathTo="M 0 112.92450000000001C 15.63175048828125 112.92450000000001 29.030393763950897 125.95425 44.662144252232146 125.95425C 60.293894740513394 125.95425 73.69253801618304 86.86500000000001 89.32428850446429 86.86500000000001C 104.95603899274553 86.86500000000001 118.35468226841517 121.611 133.98643275669642 121.611C 149.61818324497767 121.611 163.01682652064733 34.74600000000001 178.64857700892858 34.74600000000001C 194.28032749720984 34.74600000000001 207.67897077287947 104.238 223.31072126116072 104.238C 238.94247174944195 104.238 252.3411150251116 65.14875 267.97286551339283 65.14875C 283.6046160016741 65.14875 297.0032592773437 91.20825 312.635009765625 91.20825" pathFrom="M -1 217.1625L -1 217.1625L 44.662144252232146 217.1625L 89.32428850446429 217.1625L 133.98643275669642 217.1625L 178.64857700892858 217.1625L 223.31072126116072 217.1625L 267.97286551339283 217.1625L 312.635009765625 217.1625"></path><g id="SvgjsG1786" class="apexcharts-series-markers-wrap" data:realIndex="0"><g id="SvgjsG1788" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskz0prx0dqk)"><circle id="SvgjsCircle1789" r="6" cx="0" cy="112.92450000000001" class="apexcharts-marker no-pointer-events w35tk0d3bk" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="0" j="0" index="0" default-marker-size="6"></circle><circle id="SvgjsCircle1790" r="6" cx="44.662144252232146" cy="125.95425" class="apexcharts-marker no-pointer-events wdcj5na13" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="1" j="1" index="0" default-marker-size="6"></circle></g><g id="SvgjsG1791" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskz0prx0dqk)"><circle id="SvgjsCircle1792" r="6" cx="89.32428850446429" cy="86.86500000000001" class="apexcharts-marker no-pointer-events w8nma59zwl" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="2" j="2" index="0" default-marker-size="6"></circle></g><g id="SvgjsG1793" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskz0prx0dqk)"><circle id="SvgjsCircle1794" r="6" cx="133.98643275669642" cy="121.611" class="apexcharts-marker no-pointer-events w79z1y4li" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="3" j="3" index="0" default-marker-size="6"></circle></g><g id="SvgjsG1795" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskz0prx0dqk)"><circle id="SvgjsCircle1796" r="6" cx="178.64857700892858" cy="34.74600000000001" class="apexcharts-marker no-pointer-events w2is5a61f" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="4" j="4" index="0" default-marker-size="6"></circle></g><g id="SvgjsG1797" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskz0prx0dqk)"><circle id="SvgjsCircle1798" r="6" cx="223.31072126116072" cy="104.238" class="apexcharts-marker no-pointer-events wrnt1rm2d" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="5" j="5" index="0" default-marker-size="6"></circle></g><g id="SvgjsG1799" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskz0prx0dqk)"><circle id="SvgjsCircle1800" r="6" cx="267.97286551339283" cy="65.14875" class="apexcharts-marker no-pointer-events wdizisfklk" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="6" j="6" index="0" default-marker-size="6"></circle></g><g id="SvgjsG1801" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskz0prx0dqk)"><circle id="SvgjsCircle1802" r="6" cx="312.635009765625" cy="91.20825" class="apexcharts-marker no-pointer-events wxe2iign5" stroke="#696cff" fill="#ffffff" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="7" j="7" index="0" default-marker-size="6"></circle></g></g></g><g id="SvgjsG1787" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1847" x1="0" y1="0" x2="312.635009765625" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1848" x1="0" y1="0" x2="312.635009765625" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1849" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1850" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1851" class="apexcharts-point-annotations"></g><rect id="SvgjsRect1852" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1853" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><rect id="SvgjsRect1780" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1835" class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)"><g id="SvgjsG1836" class="apexcharts-yaxis-texts-g"></g></g><g id="SvgjsG1778" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 107.5px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(105, 108, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                          <div class="d-flex justify-content-center pt-4 gap-2">
                            <div class="flex-shrink-0" style="position: relative;">
                              <div id="expensesOfWeek" style="min-height: 57.7px;"><div id="apexcharts12i1nmdrj" class="apexcharts-canvas apexcharts12i1nmdrj apexcharts-theme-light" style="width: 60px; height: 57.7px;"><svg id="SvgjsSvg1571" width="60" height="57.7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1573" class="apexcharts-inner apexcharts-graphical" transform="translate(-10, -10)"><defs id="SvgjsDefs1572"><clipPath id="gridRectMask12i1nmdrj"><rect id="SvgjsRect1575" width="86" height="87" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask12i1nmdrj"></clipPath><clipPath id="nonForecastMask12i1nmdrj"></clipPath><clipPath id="gridRectMarkerMask12i1nmdrj"><rect id="SvgjsRect1576" width="84" height="89" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1577" class="apexcharts-radialbar"><g id="SvgjsG1578"><g id="SvgjsG1579" class="apexcharts-tracks"><g id="SvgjsG1580" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 39.99617740968999 18.098171065291247" fill="none" fill-opacity="1" stroke="rgba(236,238,241,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="2.0408536585365864" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 39.99617740968999 18.098171065291247"></path></g></g><g id="SvgjsG1582"><g id="SvgjsG1586" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1587" d="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 22.2810479140526 52.873572242130095" fill="none" fill-opacity="0.85" stroke="rgba(105,108,255,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="4.081707317073173" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="234" data:value="65" index="0" j="0" data:pathOrig="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 22.2810479140526 52.873572242130095"></path></g><circle id="SvgjsCircle1583" r="18.881402439024395" cx="40" cy="40" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1584" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1585" font-family="Helvetica, Arial, sans-serif" x="40" y="45" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#697a8d" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">$65</text></g></g></g></g><line id="SvgjsLine1588" x1="0" y1="0" x2="80" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1589" x1="0" y1="0" x2="80" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1574" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 61px; height: 59px;"></div></div><div class="contract-trigger"></div></div></div>
                            <div>
                              <p class="mb-n1 mt-1">Expenses This Week</p>
                              <small class="text-muted">$39 less than last week</small>
                            </div>
                          </div>
                        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 331px; height: 377px;"></div></div><div class="contract-trigger"></div></div></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Expense Overview -->

                <!-- Transactions -->
                <div class="col-md-6 col-lg-4 order-2 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">Transactions</h5>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                          <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                          <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                          <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="../assets/img/icons/unicons/paypal.png" alt="User" class="rounded">
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <small class="text-muted d-block mb-1">Paypal</small>
                              <h6 class="mb-0">Send money</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <h6 class="mb-0">+82.6</h6>
                              <span class="text-muted">USD</span>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="../assets/img/icons/unicons/wallet.png" alt="User" class="rounded">
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <small class="text-muted d-block mb-1">Wallet</small>
                              <h6 class="mb-0">Mac'D</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <h6 class="mb-0">+270.69</h6>
                              <span class="text-muted">USD</span>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="../assets/img/icons/unicons/chart.png" alt="User" class="rounded">
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <small class="text-muted d-block mb-1">Transfer</small>
                              <h6 class="mb-0">Refund</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <h6 class="mb-0">+637.91</h6>
                              <span class="text-muted">USD</span>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="../assets/img/icons/unicons/cc-success.png" alt="User" class="rounded">
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <small class="text-muted d-block mb-1">Credit Card</small>
                              <h6 class="mb-0">Ordered Food</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <h6 class="mb-0">-838.71</h6>
                              <span class="text-muted">USD</span>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="../assets/img/icons/unicons/wallet.png" alt="User" class="rounded">
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <small class="text-muted d-block mb-1">Wallet</small>
                              <h6 class="mb-0">Starbucks</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <h6 class="mb-0">+203.33</h6>
                              <span class="text-muted">USD</span>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="../assets/img/icons/unicons/cc-warning.png" alt="User" class="rounded">
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <small class="text-muted d-block mb-1">Mastercard</small>
                              <h6 class="mb-0">Ordered Food</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <h6 class="mb-0">-92.45</h6>
                              <span class="text-muted">USD</span>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Transactions -->
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>2022
                  , made with ❤️ by
                  <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
                </div>
                <div>
                  <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                  <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                  <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/" target="_blank" class="footer-link me-4">Documentation</a>

                  <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank" class="footer-link me-4">Support</a>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
<?php 

require_once('footer.php');

?>