
 web3 = new Web3(web3.currentProvider);
 console.log('metamask found');
 //預設使用metamask

var contract_address = "0xfc08c348621a175F9910c91E7b9D698eFb6f3F7C" ;

var contract_address_str = String(contract_address);
var href = " href = https://ropsten.etherscan.io/address/"+contract_address_str+" "
var contract_href = "<a" + href+ " target=_blank" + ">"+contract_address_str+"</a>"
$("#contract_address").html(contract_href);

var GIC_address = "0xb1De50BFc89cCf7D6Df2bEDAD674306961559593";
var Arina_address = "0xFe6c1821a26fDEA233D994736B7184Ab012A1f8a";
var GASH_address = "0x161271af65908B8C8f47a4A2B1c1AAEAe96ceB98";

var contract_GIC = new web3.eth.Contract(abi,GIC_address);
var contract_Arina = new web3.eth.Contract(abi,Arina_address);
var contract_GASH = new web3.eth.Contract(abi,GASH_address);
var contract = new web3.eth.Contract(abi2,contract_address);

var userAccount;
var number = 0;
function refresh_address(){
//讀取地址(web3.js beta版在讀取地址後地址可能會丟失,所以每次動作都先讀取地址)

  web3.eth.getAccounts(function(error, result) {
    userAccount = result[0];
    if(userAccount != old_address){
      number = 0;
      console.log("地址更新");
        start();
        inquire();
      }
  })
  var old_address = userAccount; //判斷更改地址用
};

setInterval(function(){refresh_address()},1000); //指定1秒重新整理一次

start();

function start(){


  if (userAccount == undefined){
    $("#address").html("未載入地址");
  }
  else{
    $("#address").html("查詢中")
    Promise.all([contract.methods.owner().call()
    ,contract.methods.owner2().call()])
    .then(
      function([result,result2]){
        if(result == userAccount || result2== userAccount){
          $("#address").html("管理員地址");
        }
        else{$("#address").html("非管理員地址");}
      })
  }
}

function push_data(_contract , _filter, token, _decimals){

  if (_filter == "from"){
    _contract.getPastEvents("Transfer",{filter:{from:contract_address},fromBlock:0,toBlock:'latest'})
    .then(function(result){
      //console.log(result);
      for(i=0; i<result.length; i++){
        number++;
        var block = result[i].blockNumber;
        var value = result[i].returnValues.value/(10**_decimals);
        var to = result[i].returnValues.to;

            var time = (result.timestamp);
            var trow = getDataRow(number, "提出", token,
            value, to , result[i].transactionHash, web3.eth.getBlock(block) );
            var tbody = document.getElementById('push');
            tbody.appendChild(trow);
      }
    });
  }
  else if(_filter == "to"){
    _contract.getPastEvents("Transfer",{filter:{to:contract_address},fromBlock:0,toBlock:'latest'})
    .then(function(result){
      //console.log(result);
      for(i=0; i<result.length; i++){
        number++;
        var block = result[i].blockNumber;
        var value = result[i].returnValues.value/(10**_decimals);
        var from = result[i].returnValues.from;

            var time = (result.timestamp);
            var trow = getDataRow(number, "轉入", token,
            value, from, result[i].transactionHash, web3.eth.getBlock(block) );
            var tbody = document.getElementById('push');
            tbody.appendChild(trow);
      }
    });
  }

  else if(_filter == "pay"){
    _contract.getPastEvents("Pay",{filter:{},fromBlock:0,toBlock:'latest'})
    .then(function(result){
      //console.log(result);
      for(i=0; i<result.length; i++){
        number++;
        var block = result[i].blockNumber;
        var value = result[i].returnValues.value/(10**_decimals);
        var payer = result[i].returnValues.payer;

            var time = (result.timestamp);
            var trow = getDataRow(number, "轉入", token,
            value, payer, result[i].transactionHash, web3.eth.getBlock(block) );
            var tbody = document.getElementById('push');
            tbody.appendChild(trow);
      }
    });
  }

  else if(_filter == "withdraw"){
    _contract.getPastEvents("Withdraw_eth",{filter:{},fromBlock:0,toBlock:'latest'})
    .then(function(result){
      //console.log(result);
      for(i=0; i<result.length; i++){
        number++;
        var block = result[i].blockNumber;
        var value = result[i].returnValues.value/(10**_decimals);
        var withdrawer = result[i].returnValues.withdrawer;

            var time = (result.timestamp);
            var trow = getDataRow(number, "提出", token,
            value, withdrawer, result[i].transactionHash, web3.eth.getBlock(block) );
            var tbody = document.getElementById('push');
            tbody.appendChild(trow);
      }
    });
  }

}

function inquire(){
$("#push").text("");

push_data(contract_GIC , "from", "GIC", 18);
push_data(contract_GIC , "to", "GIC", 18);
push_data(contract_Arina , "from", "Arina", 18);
push_data(contract_Arina , "to", "Arina", 18);
push_data(contract_GASH , "from", "Gash", 18);
push_data(contract_GASH , "to", "Gash", 18);
push_data(contract , "pay", "ETH", 18);
push_data(contract , "withdraw", "ETH", 18);
}

$("#button").click(function(){
  var select = $("select").val();
  if (select == 0){
    if($("#amout").val() == "all"){
      contract.methods.withdraw_all_eth().send({from:userAccount});
    }
    else{
      var amout = $("#amout").val()*10**18;
      contract.methods.withdraw_eth(amout).send({from:userAccount});
    }
  }
  else if(select == 1){
    console.log($("#amout").val())
    if($("#amout").val() == "all"){
      contract.methods.withdraw_all_token(GIC_address).send({from:userAccount});
    }
    else{
      var amout = $("#amout").val()*10**18;
      contract.methods.withdraw_token(GIC_address,amout).send({from:userAccount});
    }
  }
  else if(select == 2){
    if($("#amout").val() == "all"){
      contract.methods.withdraw_all_token(Arina_address).send({from:userAccount});
    }
    else{
      var amout = $("#amout").val()*10**18;
      contract.methods.withdraw_token(Arina_address,amout).send({from:userAccount});
    }
  }

  else if(select == 3){
    if($("#amout").val() == "all"){
      contract.methods.withdraw_all_token(GASH_address).send({from:userAccount});
    }
    else{
      var amout = $("#amout").val()*10**18;
      contract.methods.withdraw_token(GASH_address,amout).send({from:userAccount});
    }
  }
});




function withdraw(){



}
