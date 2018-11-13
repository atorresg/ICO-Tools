var App = {
  USD:0,
  COEF:1,
  getUSD:function(){
    $.ajax({
      url:'https://ico.atorresg.com/api/',
      method:'POST',
      jsonp: 'callback',
      dataType: "jsonp",
      data:{
        data: {
          start:2,
          limit:1,        
        },
        path: 'cryptocurrency/listings/latest'
      },
      success: function(res){
        if (res){
          App.USD=res.data[0].quote.USD.price;
          App.resetUSD();
          $('#cusd').val(App.USD).trigger('keyup');
          App.calculateETHVal();
          App.calculateTotalSupplyVal();
        } else {
          return false;
        }
      }
    });
  },
  resetUSD:function(){
    $('#usd').val(App.USD);
    App.calculateETHVal();
    return true;
  },
  calculateETHVal:function(){
    App.COEF=Math.pow(10,18-$('#dec').val())*$('#rate').val();
    $('#ethval').val((1/App.COEF).toFixed(18));
    App.calculateUSDVal();
    $('#tokval').val(App.COEF.toFixed($('#dec').val()));
  },
  calculateUSDVal:function(){
    $('#val').val(($('#usd').val()/App.COEF).toFixed(18));
  },
  calculateSupply:function(){
    $('#supply').val(bigInt($('#ntok').val()*Math.pow(10,$('#dec').val())));
  },
  calculateTotalSupplyVal:function(){
    $('#tval').val($('#val').val()*$('#ntok').val());
  },
  init: function(){
    App.getUSD();
    App.calculateSupply();
    $('[data-toggle="tooltip"]').tooltip();
    $('#ntok, #dec, #rate, #supply, #usd, #symbol, #cusd, #ceth, #ctok').on('change keyup',function(e){
      switch(e.target.id){
        case 'usd':
          App.USD=$('#usd').val();
        case 'dec':
        case 'ntok':
        case 'rate':
          App.calculateSupply();
          App.calculateETHVal();
          App.calculateTotalSupplyVal();
          $('#cusd').trigger('keyup');
          break;
        case 'symbol':
          $('.token_name').html($(this).val());
          break;
        case 'cusd':
          $('#ceth').val(($('#cusd').val()/App.USD).toFixed(18));
          $('#ctok').val(($('#cusd').val()*App.COEF/App.USD).toFixed($('#dec').val()));
          break;
        case 'ceth':
          $('#cusd').val($('#ceth').val()*App.USD);
          $('#ctok').val(($('#ceth').val()*App.COEF).toFixed($('#dec').val()));
          break;
        case 'ctok':
          $('#cusd').val($('#ctok').val()*App.USD/App.COEF);
          $('#ceth').val(($('#ctok').val()/App.COEF).toFixed(18));
          break;
      }
      App.calculateETHVal();
    });
    $('#symbol').trigger('keyup');
    $('#datetimepicker1').datetimepicker();
    $("#datetimepicker1").on("change.datetimepicker", function (e) {
      var moment = $("#datetimepicker1").datetimepicker('viewDate');
      $('#utime').val(moment.unix());
    });
  }
};

$(function(){
  App.init();
});
