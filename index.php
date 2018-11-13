<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ICO-Tools</title>
     <link rel="stylesheet" media="all" href="./css/bootstrap.min.css" />
     <link rel="stylesheet" media="all" href="./css/tempusdominus-bootstrap-4.min.css" />
     <link rel="stylesheet" media="all" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
     <link rel="stylesheet" media="all" href="./css/style.css" />
     <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-27941005-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-27941005-3');
</script>

  </head>
  <body>
    <div class="container">
      <h2>ICO Tools</h2>
      <div class="row mb-5 mt-3">
        <div class="col">
          <label for="usd">ETH value <span class="badge badge-info" data-toggle="tooltip" data-placement="bottom" title="Valor por defecto es el actual según CoinMarketCap">?</span>:</label> 
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <button class="btn btn-sm btn-success" onclick="App.resetUSD()">Actual value</button>
            </div>
            <input type="text" id="usd" class="form-control form-control-sm" placeholder="0">
            <div class="input-group-append">
              <div class="input-group-text form-control-sm">USD</div>
            </div>
          </div>
        </div>
        
        <div class="col">
          <label for="symbol">Token Symbol <span class="badge badge-info" data-toggle="tooltip" data-placement="bottom" title="Valor por defecto es el actual según CoinMarketCap">?</span>:</label>
           <input type="text" id="symbol" class="form-control form-control-sm" value="XXX">
        </div>
        <div class="col"></div>
      </div>
      <div class="row">
        <div class="col-3">
          <label for="dec">Decimals <span class="badge badge-info" data-toggle="tooltip" data-placement="bottom" title="The decimals are only for visualization purposes. All the operations are done using the smallest and indivisible token unit, just as on Ethereum all the operations are done in wei.">?</span>:</label>
          <select id="dec" class="form-control form-control-sm">
            <option value="18">18</option>
            <option value="17">17</option>
            <option value="16">16</option>
            <option value="15">15</option>
            <option value="14">14</option>
            <option value="13">13</option>
            <option value="12">12</option>
            <option value="11">11</option>
            <option value="10">10</option>
            <option value="9">9</option>
            <option value="8">8</option>
            <option value="7">7</option>
            <option value="6">6</option>
            <option value="5">5</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
            <option value="0">0</option>
          </select>
        </div>
        <div class="col-3">
          <label for="rate">Rate <span class="badge badge-info" data-toggle="tooltip" data-placement="bottom" title="Conversion between wei and the smallest and indivisible token unit. So, if you are using a rate of 1 with a ERC20Detailed token with 3 decimals called TOK, 1 wei will give you 1 unit, or 0.001 TOK.">?</span>:</label>
          <input type="text" id="rate" class="form-control form-control-sm" placeholder="ej.: 1" value="1">
        </div>
        <div class="col">
          <label for="ntok">Number of <span class="token_name">TOKEN</span> to mint:</label>
          <input type="text" id="ntok" class="form-control form-control-sm" placeholder="ej.: 1000000000" value="1000000000">
        </div>
        <div class="col">
          <label for="supply">Initial supply:</label>
          <input type="text" id="supply" class="form-control form-control-sm" value="0">
        </div>
      </div>
      <div class="row">
        
        <div class="col">
          <label for="ethval"><span class="token_name">TOKEN</span> value in ETH</label>
          <div class="input-group mb-2">
            <input type="text" id="ethval" class="form-control form-control-sm" value="0" disabled>
            <div class="input-group-append">
              <div class="input-group-text form-control-sm">ETH</div>
            </div>
          </div>
        </div>
        <div class="col">
          <label for="tokval">ETH value in <span class="token_name">TOKEN</span></label>
          <div class="input-group mb-2">
            <input type="text" id="tokval" class="form-control form-control-sm" value="0" disabled>
            <div class="input-group-append">
              <div class="input-group-text form-control-sm">
                <span class="token_name">TOKEN</span>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col">
          <label for="val"><span class="token_name">TOKEN</span> value in USD:</label>
          <div class="input-group mb-2">
            <input type="text" id="val" class="form-control form-control-sm" value="0" disabled>
            <div class="input-group-append">
              <div class="input-group-text form-control-sm">USD</div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <label for="tval">Total <span class="token_name">TOKEN</span> supply value:</label>
          <div class="input-group mb-2">
            <input type="text" id="tval" class="form-control form-control-sm" value="0" disabled>
            <div class="input-group-append">
              <div class="input-group-text form-control-sm">USD</div>
            </div>
          </div>
        </div>
      </div>
      <h3 class="mt-5"><span class="token_name">TOKEN</span> value converter</h3>
      <div class="row">
        
        <div class="col">
          <div class="input-group mb-2">
            <input type="text" id="cusd" class="form-control form-control-sm" value="0" >
            <div class="input-group-append">
              <div class="input-group-text form-control-sm">USD</div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="input-group mb-2">
            <input type="text" id="ceth" class="form-control form-control-sm" value="0" >
            <div class="input-group-append">
              <div class="input-group-text form-control-sm">ETH</div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="input-group mb-2">
            <input type="text" id="ctok" class="form-control form-control-sm" value="0" >
            <div class="input-group-append">
              <div class="input-group-text form-control-sm"><span class="token_name">TOKEN</span></div>
            </div>
          </div>
        </div>
        
      </div>
      <h3 class="mt-5">UNIX time converter</h3>
      <div class="row">
        <div class="col">
           <div class="form-group">
              <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1"/>
                <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
             </div>
          </div>
        </div>
        <div class="col">
          <input type="text" id="utime" class="form-control">
        </div>
        <div class="col-4"></div>
      </div>
    </div>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/moment.min.js"></script>
    <script src="./js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="./js/BigInteger.min.js"></script>
    <script src="./js/app.js?<?=filemtime('./js/app.js')?>"></script>
  </body>
</html>