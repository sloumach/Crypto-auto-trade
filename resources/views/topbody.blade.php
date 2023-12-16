<style>
@keyframes myAnim {
	0%,
	100% {
		transform: rotate(0deg);
		transform-origin: 50% 50%;
	}

	10% {
		transform: rotate(8deg);
	}

	20%,
	40%,
	60% {
		transform: rotate(-10deg);
	}

	30%,
	50%,
	70% {
		transform: rotate(10deg);
	}

	80% {
		transform: rotate(-8deg);
	}

	90% {
		transform: rotate(8deg);
	}
}
@keyframes myAnim2 {
	0% {
		animation-timing-function: ease-out;
		transform: scale(1);
		transform-origin: center center;
	}

	10% {
		animation-timing-function: ease-in;
		transform: scale(0.91);
	}

	17% {
		animation-timing-function: ease-out;
		transform: scale(0.98);
	}

	33% {
		animation-timing-function: ease-in;
		transform: scale(0.87);
	}

	45% {
		animation-timing-function: ease-out;
		transform: scale(1);
	}
}
</style>
<div class="col-lg-3 col-sm-6 mt-1" >
    <div class="card m-2" style="background-color:#343957; animation: myAnim 2s ease 0s 1 normal forwards;">
        <div class="stat-widget-two card-body">
            <div class="stat-content">
                <div class="stat-text text-white">Account status: </div>
                <div class="stat-digit; animation: myAnim 2s ease 0s 1 normal forwards; ">
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
    <div class="card" style="background-color:#343957;">
        <div class="stat-widget-two card-body">
            <div class="stat-content">
                <div class="stat-text text-white">Last income:</div>
                @if (empty($lasttrade))
                <div class="stat-digit"> <i class="fa fa-usd"></i>0</div>


                @else
                <div class="stat-digit text-white"> <i class="fa fa-usd"></i>{{ $lasttrade->profit }}</div>
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
    <div class="card" style="background-color:#343957;">
        <div class="stat-widget-two card-body">
            <div class="stat-content">
                <div class="stat-text text-white">Last traded amount:</div>
                @if (empty($lasttrade))
                <div class="stat-digit"> <i class="fa fa-usd"></i> 0</div>
                @else
<div class="stat-digit text-white"> <i class="fa fa-usd"></i> {{ $lasttrade->range_trade }}</div>
                @endif

            </div>
            <div class="progress">

                <div class="progress-bar progress-bar-warning w-" role="progressbar" aria-valuenow="50"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3 col-sm-6">
    <div class="card" style="background-color:#343957;">
        <div class="stat-widget-two card-body">
            <div class="stat-content">
                <div class="stat-text text-white">Total:</div>
                <div class="stat-digit text-white"> <i class="fa fa-usd"></i>{{ $prf->somme }}</div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-danger w-100" role="progressbar" aria-valuenow="65"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>
    <!-- /# card -->
</div>
