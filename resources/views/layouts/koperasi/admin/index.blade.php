@extends('layouts.koperasi.app')

@section('content')
<div class="row">
    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-animate">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1 overflow-hidden">
                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                            Total Earnings</p>
                    </div>
                    <div class="flex-shrink-0">
                        <h5 class="text-success fs-14 mb-0">
                            <i class="ri-arrow-right-up-line fs-13 align-middle"></i>
                            +16.24 %
                        </h5>
                    </div>
                </div>
                <div class="d-flex align-items-end justify-content-between mt-4">
                    <div>
                        <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value" data-target="559.25">559.25</span>k
                        </h4>
                        <a href="" class="text-decoration-underline">View net
                            earnings</a>
                    </div>
                    <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-success rounded fs-3">
                            <i class="bx bx-dollar-circle"></i>
                        </span>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-animate">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1 overflow-hidden">
                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                            Orders</p>
                    </div>
                    <div class="flex-shrink-0">
                        <h5 class="text-danger fs-14 mb-0">
                            <i class="ri-arrow-right-down-line fs-13 align-middle"></i>
                            -3.57 %
                        </h5>
                    </div>
                </div>
                <div class="d-flex align-items-end justify-content-between mt-4">
                    <div>
                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="36894">36,894</span></h4>
                        <a href="" class="text-decoration-underline">View all orders</a>
                    </div>
                    <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-info rounded fs-3">
                            <i class="bx bx-shopping-bag"></i>
                        </span>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-animate">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1 overflow-hidden">
                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                            Customers</p>
                    </div>
                    <div class="flex-shrink-0">
                        <h5 class="text-success fs-14 mb-0">
                            <i class="ri-arrow-right-up-line fs-13 align-middle"></i>
                            +29.08 %
                        </h5>
                    </div>
                </div>
                <div class="d-flex align-items-end justify-content-between mt-4">
                    <div>
                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="183.35">183.35</span>M
                        </h4>
                        <a href="" class="text-decoration-underline">See details</a>
                    </div>
                    <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-warning rounded fs-3">
                            <i class="bx bx-user-circle"></i>
                        </span>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-animate">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1 overflow-hidden">
                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                            My Balance</p>
                    </div>
                    <div class="flex-shrink-0">
                        <h5 class="text-muted fs-14 mb-0">
                            +0.00 %
                        </h5>
                    </div>
                </div>
                <div class="d-flex align-items-end justify-content-between mt-4">
                    <div>
                        <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value" data-target="165.89">165.89</span>k
                        </h4>
                        <a href="" class="text-decoration-underline">Withdraw money</a>
                    </div>
                    <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-danger rounded fs-3">
                            <i class="bx bx-wallet"></i>
                        </span>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div>
<div class="col-xl-8">
    <div class="card">
        <div class="card-header border-0 align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Revenue</h4>
            <div>
                <button type="button" class="btn btn-soft-secondary btn-sm">
                    ALL
                </button>
                <button type="button" class="btn btn-soft-secondary btn-sm">
                    1M
                </button>
                <button type="button" class="btn btn-soft-secondary btn-sm">
                    6M
                </button>
                <button type="button" class="btn btn-soft-primary btn-sm">
                    1Y
                </button>
            </div>
        </div><!-- end card header -->

        <div class="card-header p-0 border-0 bg-soft-light">
            <div class="row g-0 text-center">
                <div class="col-6 col-sm-3">
                    <div class="p-3 border border-dashed border-start-0">
                        <h5 class="mb-1"><span class="counter-value" data-target="7585">7,585</span></h5>
                        <p class="text-muted mb-0">Orders</p>
                    </div>
                </div>
                <!--end col-->
                <div class="col-6 col-sm-3">
                    <div class="p-3 border border-dashed border-start-0">
                        <h5 class="mb-1">$<span class="counter-value" data-target="22.89">22.89</span>k</h5>
                        <p class="text-muted mb-0">Earnings</p>
                    </div>
                </div>
                <!--end col-->
                <div class="col-6 col-sm-3">
                    <div class="p-3 border border-dashed border-start-0">
                        <h5 class="mb-1"><span class="counter-value" data-target="367">367</span></h5>
                        <p class="text-muted mb-0">Refunds</p>
                    </div>
                </div>
                <!--end col-->
                <div class="col-6 col-sm-3">
                    <div class="p-3 border border-dashed border-start-0 border-end-0">
                        <h5 class="mb-1 text-success"><span class="counter-value" data-target="18.92">18.92</span>%</h5>
                        <p class="text-muted mb-0">Conversation Ratio</p>
                    </div>
                </div>
                <!--end col-->
            </div>
        </div><!-- end card header -->

        <div class="card-body p-0 pb-2">
            <div class="w-100">
                <div id="customer_impression_charts" data-colors="[&quot;--vz-primary&quot;, &quot;--vz-success&quot;, &quot;--vz-danger&quot;]" class="apex-charts" dir="ltr" style="min-height: 385px;"><div id="apexchartsf5dy01yv" class="apexcharts-canvas apexchartsf5dy01yv apexcharts-theme-light" style="width: 847px; height: 370px;"><svg id="SvgjsSvg1676" width="847" height="370" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable hovering-zoom" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="847" height="370"><div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom" xmlns="http://www.w3.org/1999/xhtml" style="inset: auto 0px 10px 20px; position: absolute; max-height: 185px;"><div class="apexcharts-legend-series" rel="1" seriesname="Orders" data:collapsed="false" style="margin: 0px 10px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(64, 81, 137) !important; color: rgb(64, 81, 137); height: 9px; width: 9px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 6px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="Orders" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Orders</span></div><div class="apexcharts-legend-series" rel="2" seriesname="Earnings" data:collapsed="false" style="margin: 0px 10px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(10, 179, 156) !important; color: rgb(10, 179, 156); height: 9px; width: 9px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 6px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="Earnings" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Earnings</span></div><div class="apexcharts-legend-series" rel="3" seriesname="Refunds" data:collapsed="false" style="margin: 0px 10px;"><span class="apexcharts-legend-marker" rel="3" data:collapsed="false" style="background: rgb(240, 101, 72) !important; color: rgb(240, 101, 72); height: 9px; width: 9px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 6px;"></span><span class="apexcharts-legend-text" rel="3" i="2" data:default-text="Refunds" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Refunds</span></div></div><style type="text/css">

.apexcharts-legend {
display: flex;
overflow: auto;
padding: 0 10px;
}
.apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {
flex-wrap: wrap
}
.apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
flex-direction: column;
bottom: 0;
}
.apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
justify-content: flex-start;
}
.apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
justify-content: center;
}
.apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
justify-content: flex-end;
}
.apexcharts-legend-series {
cursor: pointer;
line-height: normal;
}
.apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series, .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series{
display: flex;
align-items: center;
}
.apexcharts-legend-text {
position: relative;
font-size: 14px;
}
.apexcharts-legend-text *, .apexcharts-legend-marker * {
pointer-events: none;
}
.apexcharts-legend-marker {
position: relative;
display: inline-block;
cursor: pointer;
margin-right: 3px;
border-style: solid;
}

.apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series{
display: inline-block;
}
.apexcharts-legend-series.apexcharts-no-click {
cursor: auto;
}
.apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
display: none !important;
}
.apexcharts-inactive-legend {
opacity: 0.45;
}</style></foreignObject><g id="SvgjsG1678" class="apexcharts-inner apexcharts-graphical" transform="translate(81.32050221183084, 30)"><defs id="SvgjsDefs1677"><clipPath id="gridRectMaskf5dy01yv"><rect id="SvgjsRect1684" width="784.4227525711059" height="265.01759814834594" x="-22.24950459220193" y="-1.1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskf5dy01yv"></clipPath><clipPath id="nonForecastMaskf5dy01yv"></clipPath><clipPath id="gridRectMarkerMaskf5dy01yv"><rect id="SvgjsRect1685" width="743.9237433867021" height="266.81759814834595" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine1683" x1="739.4237433867022" y1="0" x2="739.4237433867022" y2="262.81759814834595" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="739.4237433867022" y="0" width="1" height="262.81759814834595" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1725" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1726" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1728" font-family="Helvetica, Arial, sans-serif" x="0" y="291.81759814834595" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1729">Jan</tspan><title>Jan</title></text><text id="SvgjsText1731" font-family="Helvetica, Arial, sans-serif" x="67.26579485333656" y="291.81759814834595" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1732">Feb</tspan><title>Feb</title></text><text id="SvgjsText1734" font-family="Helvetica, Arial, sans-serif" x="134.53158970667312" y="291.81759814834595" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1735">Mar</tspan><title>Mar</title></text><text id="SvgjsText1737" font-family="Helvetica, Arial, sans-serif" x="201.79738456000968" y="291.81759814834595" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1738">Apr</tspan><title>Apr</title></text><text id="SvgjsText1740" font-family="Helvetica, Arial, sans-serif" x="269.06317941334623" y="291.81759814834595" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1741">May</tspan><title>May</title></text><text id="SvgjsText1743" font-family="Helvetica, Arial, sans-serif" x="336.32897426668274" y="291.81759814834595" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1744">Jun</tspan><title>Jun</title></text><text id="SvgjsText1746" font-family="Helvetica, Arial, sans-serif" x="403.59476912001935" y="291.81759814834595" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1747">Jul</tspan><title>Jul</title></text><text id="SvgjsText1749" font-family="Helvetica, Arial, sans-serif" x="470.86056397335585" y="291.81759814834595" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1750">Aug</tspan><title>Aug</title></text><text id="SvgjsText1752" font-family="Helvetica, Arial, sans-serif" x="538.1263588266925" y="291.81759814834595" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1753">Sep</tspan><title>Sep</title></text><text id="SvgjsText1755" font-family="Helvetica, Arial, sans-serif" x="605.392153680029" y="291.81759814834595" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1756">Oct</tspan><title>Oct</title></text><text id="SvgjsText1758" font-family="Helvetica, Arial, sans-serif" x="672.6579485333655" y="291.81759814834595" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1759">Nov</tspan><title>Nov</title></text><text id="SvgjsText1761" font-family="Helvetica, Arial, sans-serif" x="739.923743386702" y="291.81759814834595" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1762">Dec</tspan><title>Dec</title></text></g></g><g id="SvgjsG1775" class="apexcharts-grid"><g id="SvgjsG1776" class="apexcharts-gridlines-horizontal"></g><g id="SvgjsG1777" class="apexcharts-gridlines-vertical"><line id="SvgjsLine1778" x1="0" y1="0" x2="0" y2="262.81759814834595" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1779" x1="67.26579485333656" y1="0" x2="67.26579485333656" y2="262.81759814834595" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1780" x1="134.53158970667312" y1="0" x2="134.53158970667312" y2="262.81759814834595" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1781" x1="201.79738456000968" y1="0" x2="201.79738456000968" y2="262.81759814834595" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1782" x1="269.06317941334623" y1="0" x2="269.06317941334623" y2="262.81759814834595" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1783" x1="336.3289742666828" y1="0" x2="336.3289742666828" y2="262.81759814834595" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1784" x1="403.59476912001935" y1="0" x2="403.59476912001935" y2="262.81759814834595" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1785" x1="470.8605639733559" y1="0" x2="470.8605639733559" y2="262.81759814834595" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1786" x1="538.1263588266925" y1="0" x2="538.1263588266925" y2="262.81759814834595" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1787" x1="605.392153680029" y1="0" x2="605.392153680029" y2="262.81759814834595" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1788" x1="672.6579485333655" y1="0" x2="672.6579485333655" y2="262.81759814834595" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1789" x1="739.923743386702" y1="0" x2="739.923743386702" y2="262.81759814834595" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><line id="SvgjsLine1791" x1="0" y1="262.81759814834595" x2="739.9237433867021" y2="262.81759814834595" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1790" x1="0" y1="1" x2="0" y2="262.81759814834595" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1686" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1687" class="apexcharts-series" seriesName="Orders" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1690" d="M 0 262.81759814834595L 0 188.3526120063146L 67.26579485333656 120.4580658179919L 134.53158970667312 162.07085219148001L 201.79738456000965 113.88762586428325L 269.06317941334623 155.50041223777134L 336.32897426668274 129.21865242293677L 403.5947691200193 170.8314387964249L 470.86056397335585 166.45114549395242L 538.1263588266925 91.98615935192109L 605.392153680029 148.92997228406273L 672.6579485333655 124.83835912046433L 739.9237433867021 116.07777251551948L 739.9237433867021 262.81759814834595M 739.9237433867021 116.07777251551948z" fill="rgba(64,81,137,0.1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskf5dy01yv)" pathTo="M 0 262.81759814834595L 0 188.3526120063146L 67.26579485333656 120.4580658179919L 134.53158970667312 162.07085219148001L 201.79738456000965 113.88762586428325L 269.06317941334623 155.50041223777134L 336.32897426668274 129.21865242293677L 403.5947691200193 170.8314387964249L 470.86056397335585 166.45114549395242L 538.1263588266925 91.98615935192109L 605.392153680029 148.92997228406273L 672.6579485333655 124.83835912046433L 739.9237433867021 116.07777251551948L 739.9237433867021 262.81759814834595M 739.9237433867021 116.07777251551948z" pathFrom="M -1 262.81759814834595L -1 262.81759814834595L 67.26579485333656 262.81759814834595L 134.53158970667312 262.81759814834595L 201.79738456000965 262.81759814834595L 269.06317941334623 262.81759814834595L 336.32897426668274 262.81759814834595L 403.5947691200193 262.81759814834595L 470.86056397335585 262.81759814834595L 538.1263588266925 262.81759814834595L 605.392153680029 262.81759814834595L 672.6579485333655 262.81759814834595L 739.9237433867021 262.81759814834595"></path><path id="SvgjsPath1691" d="M 0 188.3526120063146L 67.26579485333656 120.4580658179919L 134.53158970667312 162.07085219148001L 201.79738456000965 113.88762586428325L 269.06317941334623 155.50041223777134L 336.32897426668274 129.21865242293677L 403.5947691200193 170.8314387964249L 470.86056397335585 166.45114549395242L 538.1263588266925 91.98615935192109L 605.392153680029 148.92997228406273L 672.6579485333655 124.83835912046433L 739.9237433867021 116.07777251551948" fill="none" fill-opacity="1" stroke="#405189" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskf5dy01yv)" pathTo="M 0 188.3526120063146L 67.26579485333656 120.4580658179919L 134.53158970667312 162.07085219148001L 201.79738456000965 113.88762586428325L 269.06317941334623 155.50041223777134L 336.32897426668274 129.21865242293677L 403.5947691200193 170.8314387964249L 470.86056397335585 166.45114549395242L 538.1263588266925 91.98615935192109L 605.392153680029 148.92997228406273L 672.6579485333655 124.83835912046433L 739.9237433867021 116.07777251551948" pathFrom="M -1 262.81759814834595L -1 262.81759814834595L 67.26579485333656 262.81759814834595L 134.53158970667312 262.81759814834595L 201.79738456000965 262.81759814834595L 269.06317941334623 262.81759814834595L 336.32897426668274 262.81759814834595L 403.5947691200193 262.81759814834595L 470.86056397335585 262.81759814834595L 538.1263588266925 262.81759814834595L 605.392153680029 262.81759814834595L 672.6579485333655 262.81759814834595L 739.9237433867021 262.81759814834595"></path><g id="SvgjsG1688" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1797" r="0" cx="739.9237433867021" cy="116.07777251551948" class="apexcharts-marker w83dtsudp" stroke="#ffffff" fill="#405189" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g></g><g id="SvgjsG1692" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1693" class="apexcharts-series" rel="1" seriesName="Earnings" data:realIndex="1"><path id="SvgjsPath1697" d="M -10.089869228000484 262.81759814834595L -10.089869228000484 67.34700952551367Q -10.089869228000484 67.34700952551367 -10.089869228000484 67.34700952551367L 10.089869228000484 67.34700952551367Q 10.089869228000484 67.34700952551367 10.089869228000484 67.34700952551367L 10.089869228000484 67.34700952551367L 10.089869228000484 262.81759814834595L 10.089869228000484 262.81759814834595z" fill="rgba(10,179,156,0.9)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskf5dy01yv)" pathTo="M -10.089869228000484 262.81759814834595L -10.089869228000484 67.34700952551367Q -10.089869228000484 67.34700952551367 -10.089869228000484 67.34700952551367L 10.089869228000484 67.34700952551367Q 10.089869228000484 67.34700952551367 10.089869228000484 67.34700952551367L 10.089869228000484 67.34700952551367L 10.089869228000484 262.81759814834595L 10.089869228000484 262.81759814834595z" pathFrom="M -10.089869228000484 262.81759814834595L -10.089869228000484 262.81759814834595L 10.089869228000484 262.81759814834595L 10.089869228000484 262.81759814834595L 10.089869228000484 262.81759814834595L 10.089869228000484 262.81759814834595L 10.089869228000484 262.81759814834595L -10.089869228000484 262.81759814834595" cy="67.34700952551367" cx="10.089869228000484" j="0" val="89.25" barHeight="195.47058862283228" barWidth="20.17973845600097"></path><path id="SvgjsPath1699" d="M 57.17592562533608 262.81759814834595L 57.17592562533608 46.912941269479774Q 57.17592562533608 46.912941269479774 57.17592562533608 46.912941269479774L 77.35566408133704 46.912941269479774Q 77.35566408133704 46.912941269479774 77.35566408133704 46.912941269479774L 77.35566408133704 46.912941269479774L 77.35566408133704 262.81759814834595L 77.35566408133704 262.81759814834595z" fill="rgba(10,179,156,0.9)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskf5dy01yv)" pathTo="M 57.17592562533608 262.81759814834595L 57.17592562533608 46.912941269479774Q 57.17592562533608 46.912941269479774 57.17592562533608 46.912941269479774L 77.35566408133704 46.912941269479774Q 77.35566408133704 46.912941269479774 77.35566408133704 46.912941269479774L 77.35566408133704 46.912941269479774L 77.35566408133704 262.81759814834595L 77.35566408133704 262.81759814834595z" pathFrom="M 57.17592562533608 262.81759814834595L 57.17592562533608 262.81759814834595L 77.35566408133704 262.81759814834595L 77.35566408133704 262.81759814834595L 77.35566408133704 262.81759814834595L 77.35566408133704 262.81759814834595L 77.35566408133704 262.81759814834595L 57.17592562533608 262.81759814834595" cy="46.912941269479774" cx="77.35566408133704" j="1" val="98.58" barHeight="215.90465687886618" barWidth="20.17973845600097"></path><path id="SvgjsPath1701" d="M 124.44172047867264 262.81759814834595L 124.44172047867264 112.26691734236846Q 124.44172047867264 112.26691734236846 124.44172047867264 112.26691734236846L 144.6214589346736 112.26691734236846Q 144.6214589346736 112.26691734236846 144.6214589346736 112.26691734236846L 144.6214589346736 112.26691734236846L 144.6214589346736 262.81759814834595L 144.6214589346736 262.81759814834595z" fill="rgba(10,179,156,0.9)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskf5dy01yv)" pathTo="M 124.44172047867264 262.81759814834595L 124.44172047867264 112.26691734236846Q 124.44172047867264 112.26691734236846 124.44172047867264 112.26691734236846L 144.6214589346736 112.26691734236846Q 144.6214589346736 112.26691734236846 144.6214589346736 112.26691734236846L 144.6214589346736 112.26691734236846L 144.6214589346736 262.81759814834595L 144.6214589346736 262.81759814834595z" pathFrom="M 124.44172047867264 262.81759814834595L 124.44172047867264 262.81759814834595L 144.6214589346736 262.81759814834595L 144.6214589346736 262.81759814834595L 144.6214589346736 262.81759814834595L 144.6214589346736 262.81759814834595L 144.6214589346736 262.81759814834595L 124.44172047867264 262.81759814834595" cy="112.26691734236846" cx="144.6214589346736" j="2" val="68.74" barHeight="150.5506808059775" barWidth="20.17973845600097"></path><path id="SvgjsPath1703" d="M 191.70751533200917 262.81759814834595L 191.70751533200917 24.376332228259088Q 191.70751533200917 24.376332228259088 191.70751533200917 24.376332228259088L 211.88725378801013 24.376332228259088Q 211.88725378801013 24.376332228259088 211.88725378801013 24.376332228259088L 211.88725378801013 24.376332228259088L 211.88725378801013 262.81759814834595L 211.88725378801013 262.81759814834595z" fill="rgba(10,179,156,0.9)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskf5dy01yv)" pathTo="M 191.70751533200917 262.81759814834595L 191.70751533200917 24.376332228259088Q 191.70751533200917 24.376332228259088 191.70751533200917 24.376332228259088L 211.88725378801013 24.376332228259088Q 211.88725378801013 24.376332228259088 211.88725378801013 24.376332228259088L 211.88725378801013 24.376332228259088L 211.88725378801013 262.81759814834595L 211.88725378801013 262.81759814834595z" pathFrom="M 191.70751533200917 262.81759814834595L 191.70751533200917 262.81759814834595L 211.88725378801013 262.81759814834595L 211.88725378801013 262.81759814834595L 211.88725378801013 262.81759814834595L 211.88725378801013 262.81759814834595L 211.88725378801013 262.81759814834595L 191.70751533200917 262.81759814834595" cy="24.376332228259088" cx="211.88725378801013" j="3" val="108.87" barHeight="238.44126592008686" barWidth="20.17973845600097"></path><path id="SvgjsPath1705" d="M 258.9733101853457 262.81759814834595L 258.9733101853457 92.99362681148975Q 258.9733101853457 92.99362681148975 258.9733101853457 92.99362681148975L 279.1530486413467 92.99362681148975Q 279.1530486413467 92.99362681148975 279.1530486413467 92.99362681148975L 279.1530486413467 92.99362681148975L 279.1530486413467 262.81759814834595L 279.1530486413467 262.81759814834595z" fill="rgba(10,179,156,0.9)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskf5dy01yv)" pathTo="M 258.9733101853457 262.81759814834595L 258.9733101853457 92.99362681148975Q 258.9733101853457 92.99362681148975 258.9733101853457 92.99362681148975L 279.1530486413467 92.99362681148975Q 279.1530486413467 92.99362681148975 279.1530486413467 92.99362681148975L 279.1530486413467 92.99362681148975L 279.1530486413467 262.81759814834595L 279.1530486413467 262.81759814834595z" pathFrom="M 258.9733101853457 262.81759814834595L 258.9733101853457 262.81759814834595L 279.1530486413467 262.81759814834595L 279.1530486413467 262.81759814834595L 279.1530486413467 262.81759814834595L 279.1530486413467 262.81759814834595L 279.1530486413467 262.81759814834595L 258.9733101853457 262.81759814834595" cy="92.99362681148975" cx="279.1530486413467" j="4" val="77.54" barHeight="169.8239713368562" barWidth="20.17973845600097"></path><path id="SvgjsPath1707" d="M 326.2391050386822 262.81759814834595L 326.2391050386822 78.77957504496672Q 326.2391050386822 78.77957504496672 326.2391050386822 78.77957504496672L 346.4188434946832 78.77957504496672Q 346.4188434946832 78.77957504496672 346.4188434946832 78.77957504496672L 346.4188434946832 78.77957504496672L 346.4188434946832 262.81759814834595L 346.4188434946832 262.81759814834595z" fill="rgba(10,179,156,0.9)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskf5dy01yv)" pathTo="M 326.2391050386822 262.81759814834595L 326.2391050386822 78.77957504496672Q 326.2391050386822 78.77957504496672 326.2391050386822 78.77957504496672L 346.4188434946832 78.77957504496672Q 346.4188434946832 78.77957504496672 346.4188434946832 78.77957504496672L 346.4188434946832 78.77957504496672L 346.4188434946832 262.81759814834595L 346.4188434946832 262.81759814834595z" pathFrom="M 326.2391050386822 262.81759814834595L 326.2391050386822 262.81759814834595L 346.4188434946832 262.81759814834595L 346.4188434946832 262.81759814834595L 346.4188434946832 262.81759814834595L 346.4188434946832 262.81759814834595L 346.4188434946832 262.81759814834595L 326.2391050386822 262.81759814834595" cy="78.77957504496672" cx="346.4188434946832" j="5" val="84.03" barHeight="184.03802310337923" barWidth="20.17973845600097"></path><path id="SvgjsPath1709" d="M 393.5048998920188 262.81759814834595L 393.5048998920188 150.59448373900221Q 393.5048998920188 150.59448373900221 393.5048998920188 150.59448373900221L 413.68463834801975 150.59448373900221Q 413.68463834801975 150.59448373900221 413.68463834801975 150.59448373900221L 413.68463834801975 150.59448373900221L 413.68463834801975 262.81759814834595L 413.68463834801975 262.81759814834595z" fill="rgba(10,179,156,0.9)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskf5dy01yv)" pathTo="M 393.5048998920188 262.81759814834595L 393.5048998920188 150.59448373900221Q 393.5048998920188 150.59448373900221 393.5048998920188 150.59448373900221L 413.68463834801975 150.59448373900221Q 413.68463834801975 150.59448373900221 413.68463834801975 150.59448373900221L 413.68463834801975 150.59448373900221L 413.68463834801975 262.81759814834595L 413.68463834801975 262.81759814834595z" pathFrom="M 393.5048998920188 262.81759814834595L 393.5048998920188 262.81759814834595L 413.68463834801975 262.81759814834595L 413.68463834801975 262.81759814834595L 413.68463834801975 262.81759814834595L 413.68463834801975 262.81759814834595L 413.68463834801975 262.81759814834595L 393.5048998920188 262.81759814834595" cy="150.59448373900221" cx="413.68463834801975" j="6" val="51.24" barHeight="112.22311440934372" barWidth="20.17973845600097"></path><path id="SvgjsPath1711" d="M 460.77069474535534 262.81759814834595L 460.77069474535534 200.24510832252724Q 460.77069474535534 200.24510832252724 460.77069474535534 200.24510832252724L 480.9504332013563 200.24510832252724Q 480.9504332013563 200.24510832252724 480.9504332013563 200.24510832252724L 480.9504332013563 200.24510832252724L 480.9504332013563 262.81759814834595L 480.9504332013563 262.81759814834595z" fill="rgba(10,179,156,0.9)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskf5dy01yv)" pathTo="M 460.77069474535534 262.81759814834595L 460.77069474535534 200.24510832252724Q 460.77069474535534 200.24510832252724 460.77069474535534 200.24510832252724L 480.9504332013563 200.24510832252724Q 480.9504332013563 200.24510832252724 480.9504332013563 200.24510832252724L 480.9504332013563 200.24510832252724L 480.9504332013563 262.81759814834595L 480.9504332013563 262.81759814834595z" pathFrom="M 460.77069474535534 262.81759814834595L 460.77069474535534 262.81759814834595L 480.9504332013563 262.81759814834595L 480.9504332013563 262.81759814834595L 480.9504332013563 262.81759814834595L 480.9504332013563 262.81759814834595L 480.9504332013563 262.81759814834595L 460.77069474535534 262.81759814834595" cy="200.24510832252724" cx="480.9504332013563" j="7" val="28.57" barHeight="62.57248982581869" barWidth="20.17973845600097"></path><path id="SvgjsPath1713" d="M 528.036489598692 262.81759814834595L 528.036489598692 60.07572264340945Q 528.036489598692 60.07572264340945 528.036489598692 60.07572264340945L 548.216228054693 60.07572264340945Q 548.216228054693 60.07572264340945 548.216228054693 60.07572264340945L 548.216228054693 60.07572264340945L 548.216228054693 262.81759814834595L 548.216228054693 262.81759814834595z" fill="rgba(10,179,156,0.9)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskf5dy01yv)" pathTo="M 528.036489598692 262.81759814834595L 528.036489598692 60.07572264340945Q 528.036489598692 60.07572264340945 528.036489598692 60.07572264340945L 548.216228054693 60.07572264340945Q 548.216228054693 60.07572264340945 548.216228054693 60.07572264340945L 548.216228054693 60.07572264340945L 548.216228054693 262.81759814834595L 548.216228054693 262.81759814834595z" pathFrom="M 528.036489598692 262.81759814834595L 528.036489598692 262.81759814834595L 548.216228054693 262.81759814834595L 548.216228054693 262.81759814834595L 548.216228054693 262.81759814834595L 548.216228054693 262.81759814834595L 548.216228054693 262.81759814834595L 528.036489598692 262.81759814834595" cy="60.07572264340945" cx="548.216228054693" j="8" val="92.57" barHeight="202.7418755049365" barWidth="20.17973845600097"></path><path id="SvgjsPath1715" d="M 595.3022844520285 262.81759814834595L 595.3022844520285 170.04298600197984Q 595.3022844520285 170.04298600197984 595.3022844520285 170.04298600197984L 615.4820229080295 170.04298600197984Q 615.4820229080295 170.04298600197984 615.4820229080295 170.04298600197984L 615.4820229080295 170.04298600197984L 615.4820229080295 262.81759814834595L 615.4820229080295 262.81759814834595z" fill="rgba(10,179,156,0.9)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskf5dy01yv)" pathTo="M 595.3022844520285 262.81759814834595L 595.3022844520285 170.04298600197984Q 595.3022844520285 170.04298600197984 595.3022844520285 170.04298600197984L 615.4820229080295 170.04298600197984Q 615.4820229080295 170.04298600197984 615.4820229080295 170.04298600197984L 615.4820229080295 170.04298600197984L 615.4820229080295 262.81759814834595L 615.4820229080295 262.81759814834595z" pathFrom="M 595.3022844520285 262.81759814834595L 595.3022844520285 262.81759814834595L 615.4820229080295 262.81759814834595L 615.4820229080295 262.81759814834595L 615.4820229080295 262.81759814834595L 615.4820229080295 262.81759814834595L 615.4820229080295 262.81759814834595L 595.3022844520285 262.81759814834595" cy="170.04298600197984" cx="615.4820229080295" j="9" val="42.36" barHeight="92.77461214636611" barWidth="20.17973845600097"></path><path id="SvgjsPath1717" d="M 662.568079305365 262.81759814834595L 662.568079305365 68.96771804742846Q 662.568079305365 68.96771804742846 662.568079305365 68.96771804742846L 682.747817761366 68.96771804742846Q 682.747817761366 68.96771804742846 682.747817761366 68.96771804742846L 682.747817761366 68.96771804742846L 682.747817761366 262.81759814834595L 682.747817761366 262.81759814834595z" fill="rgba(10,179,156,0.9)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskf5dy01yv)" pathTo="M 662.568079305365 262.81759814834595L 662.568079305365 68.96771804742846Q 662.568079305365 68.96771804742846 662.568079305365 68.96771804742846L 682.747817761366 68.96771804742846Q 682.747817761366 68.96771804742846 682.747817761366 68.96771804742846L 682.747817761366 68.96771804742846L 682.747817761366 262.81759814834595L 682.747817761366 262.81759814834595z" pathFrom="M 662.568079305365 262.81759814834595L 662.568079305365 262.81759814834595L 682.747817761366 262.81759814834595L 682.747817761366 262.81759814834595L 682.747817761366 262.81759814834595L 682.747817761366 262.81759814834595L 682.747817761366 262.81759814834595L 662.568079305365 262.81759814834595" cy="68.96771804742846" cx="682.747817761366" j="10" val="88.51" barHeight="193.8498801009175" barWidth="20.17973845600097"></path><path id="SvgjsPath1719" d="M 729.8338741587016 262.81759814834595L 729.8338741587016 182.72393511263752Q 729.8338741587016 182.72393511263752 729.8338741587016 182.72393511263752L 750.0136126147027 182.72393511263752Q 750.0136126147027 182.72393511263752 750.0136126147027 182.72393511263752L 750.0136126147027 182.72393511263752L 750.0136126147027 262.81759814834595L 750.0136126147027 262.81759814834595z" fill="rgba(10,179,156,0.9)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskf5dy01yv)" pathTo="M 729.8338741587016 262.81759814834595L 729.8338741587016 182.72393511263752Q 729.8338741587016 182.72393511263752 729.8338741587016 182.72393511263752L 750.0136126147027 182.72393511263752Q 750.0136126147027 182.72393511263752 750.0136126147027 182.72393511263752L 750.0136126147027 182.72393511263752L 750.0136126147027 262.81759814834595L 750.0136126147027 262.81759814834595z" pathFrom="M 729.8338741587016 262.81759814834595L 729.8338741587016 262.81759814834595L 750.0136126147027 262.81759814834595L 750.0136126147027 262.81759814834595L 750.0136126147027 262.81759814834595L 750.0136126147027 262.81759814834595L 750.0136126147027 262.81759814834595L 729.8338741587016 262.81759814834595" cy="182.72393511263752" cx="750.0136126147027" j="11" val="36.57" barHeight="80.09366303570843" barWidth="20.17973845600097"></path><g id="SvgjsG1695" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG1696" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1698" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1700" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1702" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1704" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1706" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1708" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1710" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1712" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1714" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1716" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1718" className="apexcharts-bar-goals-groups"></g></g></g></g><g id="SvgjsG1720" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1721" class="apexcharts-series" seriesName="Refunds" data:longestSeries="true" rel="1" data:realIndex="2"><path id="SvgjsPath1724" d="M 0 245.29642493845623L 67.26579485333656 236.53583833351135L 134.53158970667312 247.48657158969243L 201.79738456000965 225.58510507733027L 269.06317941334623 216.82451847238542L 336.32897426668274 238.72598498474758L 403.5947691200193 251.86686489216487L 470.86056397335585 243.10627828722L 538.1263588266925 247.48657158969243L 605.392153680029 199.30334526249567L 672.6579485333655 236.53583833351135L 739.9237433867021 186.16246535507838" fill="none" fill-opacity="1" stroke="rgba(240,101,72,1)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2.2" stroke-dasharray="8" class="apexcharts-line" index="2" clip-path="url(#gridRectMaskf5dy01yv)" pathTo="M 0 245.29642493845623L 67.26579485333656 236.53583833351135L 134.53158970667312 247.48657158969243L 201.79738456000965 225.58510507733027L 269.06317941334623 216.82451847238542L 336.32897426668274 238.72598498474758L 403.5947691200193 251.86686489216487L 470.86056397335585 243.10627828722L 538.1263588266925 247.48657158969243L 605.392153680029 199.30334526249567L 672.6579485333655 236.53583833351135L 739.9237433867021 186.16246535507838" pathFrom="M -1 262.81759814834595L -1 262.81759814834595L 67.26579485333656 262.81759814834595L 134.53158970667312 262.81759814834595L 201.79738456000965 262.81759814834595L 269.06317941334623 262.81759814834595L 336.32897426668274 262.81759814834595L 403.5947691200193 262.81759814834595L 470.86056397335585 262.81759814834595L 538.1263588266925 262.81759814834595L 605.392153680029 262.81759814834595L 672.6579485333655 262.81759814834595L 739.9237433867021 262.81759814834595"></path><g id="SvgjsG1722" class="apexcharts-series-markers-wrap" data:realIndex="2"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1798" r="0" cx="739.9237433867021" cy="186.16246535507838" class="apexcharts-marker wbmef7yqb" stroke="#ffffff" fill="#f06548" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1689" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1694" class="apexcharts-datalabels" data:realIndex="1"></g><g id="SvgjsG1723" class="apexcharts-datalabels" data:realIndex="2"></g></g><line id="SvgjsLine1792" x1="-19.14950459220193" y1="0" x2="759.073247978904" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1793" x1="-19.14950459220193" y1="0" x2="759.073247978904" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1794" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1795" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1796" class="apexcharts-point-annotations"></g><rect id="SvgjsRect1799" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1800" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><rect id="SvgjsRect1682" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1763" class="apexcharts-yaxis" rel="0" transform="translate(30.170997619628906, 0)"><g id="SvgjsG1764" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1765" font-family="Helvetica, Arial, sans-serif" x="20" y="31.4" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1766">120.00</tspan><title>120.00</title></text><text id="SvgjsText1767" font-family="Helvetica, Arial, sans-serif" x="20" y="97.1043995370865" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1768">90.00</tspan><title>90.00</title></text><text id="SvgjsText1769" font-family="Helvetica, Arial, sans-serif" x="20" y="162.80879907417298" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1770">60.00</tspan><title>60.00</title></text><text id="SvgjsText1771" font-family="Helvetica, Arial, sans-serif" x="20" y="228.51319861125947" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1772">30.00</tspan><title>30.00</title></text><text id="SvgjsText1773" font-family="Helvetica, Arial, sans-serif" x="20" y="294.2175981483459" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1774">0.00</tspan><title>0.00</title></text></g></g><g id="SvgjsG1679" class="apexcharts-annotations"></g></svg><div class="apexcharts-tooltip apexcharts-theme-light" style="left: 673.319px; top: 9.95px;"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Dec</div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(64, 81, 137);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">Orders</span><span class="apexcharts-tooltip-text-y-value">67</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 2; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(10, 179, 156);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">Earnings</span><span class="apexcharts-tooltip-text-y-value">$36.57k</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 3; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(240, 101, 72);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">Refunds</span><span class="apexcharts-tooltip-text-y-value">35 Sales</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light" style="left: 797.119px; top: 294.818px;"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; min-width: 25.251px;">Dec</div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
            </div>
        </div><!-- end card body -->
    </div><!-- end card -->
</div>
<div class="col-xl-8">
    <div class="card">
        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Recent Orders</h4>
            <div class="flex-shrink-0">
                <button type="button" class="btn btn-soft-info btn-sm">
                    <i class="ri-file-list-3-line align-middle"></i> Generate Report
                </button>
            </div>
        </div><!-- end card header -->

        <div class="card-body">
            <div class="table-responsive table-card">
                <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                    <thead class="text-muted table-light">
                        <tr>
                            <th scope="col">Order ID</th>
                            <th scope="col">Customer</th>
                            <th scope="col">Product</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Vendor</th>
                            <th scope="col">Status</th>
                            <th scope="col">Rating</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">#VZ2112</a>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-2">
                                        <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-circle">
                                    </div>
                                    <div class="flex-grow-1">Alex Smith</div>
                                </div>
                            </td>
                            <td>Clothes</td>
                            <td>
                                <span class="text-success">$109.00</span>
                            </td>
                            <td>Zoetic Fashion</td>
                            <td>
                                <span class="badge badge-soft-success">Paid</span>
                            </td>
                            <td>
                                <h5 class="fs-14 fw-medium mb-0">5.0<span class="text-muted fs-11 ms-1">(61
                                        votes)</span></h5>
                            </td>
                        </tr><!-- end tr -->
                        <tr>
                            <td>
                                <a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">#VZ2111</a>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-2">
                                        <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle">
                                    </div>
                                    <div class="flex-grow-1">Jansh Brown</div>
                                </div>
                            </td>
                            <td>Kitchen Storage</td>
                            <td>
                                <span class="text-success">$149.00</span>
                            </td>
                            <td>Micro Design</td>
                            <td>
                                <span class="badge badge-soft-warning">Pending</span>
                            </td>
                            <td>
                                <h5 class="fs-14 fw-medium mb-0">4.5<span class="text-muted fs-11 ms-1">(61
                                        votes)</span></h5>
                            </td>
                        </tr><!-- end tr -->
                        <tr>
                            <td>
                                <a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">#VZ2109</a>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-2">
                                        <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle">
                                    </div>
                                    <div class="flex-grow-1">Ayaan Bowen</div>
                                </div>
                            </td>
                            <td>Bike Accessories</td>
                            <td>
                                <span class="text-success">$215.00</span>
                            </td>
                            <td>Nesta Technologies</td>
                            <td>
                                <span class="badge badge-soft-success">Paid</span>
                            </td>
                            <td>
                                <h5 class="fs-14 fw-medium mb-0">4.9<span class="text-muted fs-11 ms-1">(89
                                        votes)</span></h5>
                            </td>
                        </tr><!-- end tr -->
                        <tr>
                            <td>
                                <a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">#VZ2108</a>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-2">
                                        <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-xs rounded-circle">
                                    </div>
                                    <div class="flex-grow-1">Prezy Mark</div>
                                </div>
                            </td>
                            <td>Furniture</td>
                            <td>
                                <span class="text-success">$199.00</span>
                            </td>
                            <td>Syntyce Solutions</td>
                            <td>
                                <span class="badge badge-soft-danger">Unpaid</span>
                            </td>
                            <td>
                                <h5 class="fs-14 fw-medium mb-0">4.3<span class="text-muted fs-11 ms-1">(47
                                        votes)</span></h5>
                            </td>
                        </tr><!-- end tr -->
                        <tr>
                            <td>
                                <a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">#VZ2107</a>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-2">
                                        <img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle">
                                    </div>
                                    <div class="flex-grow-1">Vihan Hudda</div>
                                </div>
                            </td>
                            <td>Bags and Wallets</td>
                            <td>
                                <span class="text-success">$330.00</span>
                            </td>
                            <td>iTest Factory</td>
                            <td>
                                <span class="badge badge-soft-success">Paid</span>
                            </td>
                            <td>
                                <h5 class="fs-14 fw-medium mb-0">4.7<span class="text-muted fs-11 ms-1">(161
                                        votes)</span></h5>
                            </td>
                        </tr><!-- end tr -->
                    </tbody><!-- end tbody -->
                </table><!-- end table -->
            </div>
        </div>
    </div> <!-- .card-->
</div>
@endsection
