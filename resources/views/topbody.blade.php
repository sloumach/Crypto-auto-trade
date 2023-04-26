<div class="col-lg-3 col-sm-6">
    <div class="card">
        <div class="stat-widget-two card-body">
            <div class="stat-content">
                <div class="stat-text">Account status: </div>
                <div class="stat-digit">
                    @if ($prf->status == '0')
                        <span class="badge bg-danger stat-digit text-white">Not verified</span>
                    @endif
                    @if ($prf->status == '2')
                        <span class="badge bg-warning stat-digit text-white">Pending</span>
                    @endif
                    @if ($prf->status == '1')
                        <span class="badge bg-success  text-white">verified</span>
                    @endif
                </div>
            </div>

        </div>
    </div>
</div>
<div class="col-lg-3 col-sm-6">
    <div class="card">
        <div class="stat-widget-two card-body">
            <div class="stat-content">
                <div class="stat-text">Last income:</div>
                @if (empty($lasttrade))
                <div class="stat-digit"> <i class="fa fa-usd"></i>null</div>


                @else
                <div class="stat-digit"> <i class="fa fa-usd"></i>{{ $lasttrade->profit }}</div>
                                @endif
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-primary w-75" role="progressbar" aria-valuenow="78"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3 col-sm-6">
    <div class="card">
        <div class="stat-widget-two card-body">
            <div class="stat-content">
                <div class="stat-text">Last traded amount:</div>
                @if (empty($lasttrade))
                <div class="stat-digit"> <i class="fa fa-usd"></i> null</div>
                @else
<div class="stat-digit"> <i class="fa fa-usd"></i> {{ $lasttrade->range_trade }}</div>
                @endif

            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-warning w-50" role="progressbar" aria-valuenow="50"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3 col-sm-6">
    <div class="card">
        <div class="stat-widget-two card-body">
            <div class="stat-content">
                <div class="stat-text">Total:</div>
                <div class="stat-digit"> <i class="fa fa-usd"></i>{{ $prf->somme }}</div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-danger w-65" role="progressbar" aria-valuenow="65"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>
    <!-- /# card -->
</div>
