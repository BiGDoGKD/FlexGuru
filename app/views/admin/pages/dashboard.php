<?php include APPROOT . '/views/admin/components/header.php'; ?>
<style>
    .dashboard {
        width: 95%;
        margin: auto;
    }

    .dashboard-item {
        transition: box-shadow 280ms cubic-bezier(0.4, 0, 0.2, 1);
        margin: 20px 0.75rem;
        display: block;
        position: relative;
        padding: 16px;
        border-radius: 4px;
        overflow: hidden;
        box-sizing: border-box;
        box-shadow: 0 8px 12px rgba(47, 60, 74, .04), 0 2px 6px rgba(47, 60, 74, .08) !important;
    }

    .db-content-row {
        flex-flow: row wrap;
        width: 100%;
        margin: 20px 0px;
        display: flex;
        justify-content: space-between;
        box-sizing: border-box;
    }

    .db-content-row .content-box {
        flex: 1 1 25%;
        box-sizing: border-box;
        max-width: 25%;
    }

    .db-content-row .content-box .content-card {
        transition: box-shadow 280ms cubic-bezier(0.4, 0, 0.2, 1);
        display: block;
        position: relative;
        padding: 16px;
        border-radius: 4px;
        margin: .75rem;
        overflow: hidden;
        box-sizing: border-box;
        box-shadow: 0 8px 12px rgba(47, 60, 74, .04), 0 2px 6px rgba(47, 60, 74, .08) !important;
    }

    .db-content-row .content-box .content-card .card-title {
        margin-top: 0;
        margin-bottom: 8px;
        place-content: center flex-start;
        align-items: center;
        flex-direction: row;
        box-sizing: border-box;
        display: flex;
        max-height: 40px;
    }

    .db-content-row .content-box .content-card .card-title .card-spacer {
        flex: 1 1 0%;
        box-sizing: border-box;
    }


    .db-content-row .content-box .content-card .card-content {
        margin-bottom: 0;
        display: block;
    }

    .db-content-row .content-box .content-card .card-title .card-chip {
        padding: 2px 10px;
        border-radius: 10px;
        color: var(--on-primary);
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    .db-content-row .content-box .content-card .card-title .card-chip i {
        margin: 0 3px;
    }
</style>
<div class="dashboard">
    <div class="db-content-row">
        <div class="content-box">
            <div class="content-card">
                <div class="card-title">
                    <h5 class="gray">Total Sales</h5>
                    <span class="card-spacer"></span>
                    <div class="card-chip btn-txt bg-on-error"><i class="fas fa-angle-double-down"></i>23%</div>
                </div>
                <div class="card-content">
                    <p class="subtitle-2 dark">22,450</p>
                    <p class="subtitle-3 gray">Monthly</p>
                </div>
            </div>
        </div>
        <div class="content-box">
            <div class="content-card">
                <div class="card-title">
                    <h5 class="gray">Revenue</h5>
                    <span class="card-spacer"></span>
                    <div class="card-chip btn-txt bg-on-success"><i class="fas fa-angle-double-up"></i>13%</div>
                </div>
                <div class="card-content">
                    <p class="subtitle-2 dark">222,450</p>
                    <p class="subtitle-3 gray">Monthly</p>
                </div>
            </div>
        </div>
        <div class="content-box">
            <div class="content-card">
                <div class="card-title">
                    <h5 class="gray">Traffic</h5>
                    <span class="card-spacer"></span>
                    <div class="card-chip btn-txt bg-on-success"><i class="fas fa-angle-double-up"></i>33%</div>
                </div>
                <div class="card-content">
                    <p class="subtitle-2 dark">59,450</p>
                    <p class="subtitle-3 gray">Monthly</p>
                </div>
            </div>
        </div>
        <div class="content-box">
            <div class="content-card">
                <div class="card-title">
                    <h5 class="gray">New Users</h5>
                    <span class="card-spacer"></span>
                    <div class="card-chip btn-txt bg-on-error"><i class="fas fa-angle-double-down"></i>5%</div>
                </div>
                <div class="card-content">
                    <p class="subtitle-2 dark">450</p>
                    <p class="subtitle-3 gray">Monthly</p>
                </div>
            </div>
        </div>
    </div>




    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Month', 'Revenue', 'Profit'],
                ['Jan', 1000, 400],
                ['Feb', 1170, 460],
                ['Mar', 660, 1120],
                ['Apr', 1030, 540],
                ['May', 1030, 540],
                ['Jun', 1030, 540],
                ['Jul', 1030, 540],
                ['Aug', 1030, 540],
                ['Sep', 1030, 540],
                ['Oct', 1030, 540],
                ['Nov', 1030, 540],
                ['Dec', 1030, 540]
            ]);

            var options = {
                title: 'Flexguru Revenue',
                hAxis: {
                    title: 'Past Year Revenue Generation vs Profit Generation',
                    titleTextStyle: {
                        color: '#333'
                    }
                },
                vAxis: {
                    minValue: 0
                }
            };

            var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>


    <div class="dashboard-item">
        <div id="chart_div" style="width: 100%; height: 500px;"></div>
    </div>
</div>