//交易編號  交易類型   交易幣別  交易金額  交易備註  交易TxHash  交易時間
       function getDataRow(number,type,token,value,address,_Tx,time){
        var row = document.createElement('tr'); //創建行

        var numberCell = document.createElement('td'); //創建第一列id
        numberCell.innerHTML = number; //填充數據(number為單號)
        row.appendChild(numberCell); //加入行

        var typeCell = document.createElement('td'); //創建第二列id
        typeCell.innerHTML = type;
        row.appendChild(typeCell);

        var tokenCell = document.createElement('td'); //創建第三列id
        tokenCell.innerHTML = token;
        row.appendChild(tokenCell);

        var valueCell = document.createElement('td'); //創建第四列id
        valueCell.innerHTML = value;
        row.appendChild(valueCell);

        var addressCell = document.createElement('td'); //創建第五列id
        addressCell.innerHTML = address;
        row.appendChild(addressCell);

        var TxCell = document.createElement('td');
        var Tx = " href = https://ropsten.etherscan.io/tx/"+String(_Tx)+" "
        var href = "<a" + Tx+ " target=_blank" + ">"+"點我查詢"+"</a>"
        TxCell.innerHTML = href;
        row.appendChild(TxCell);

        var timeCell = document.createElement('td');
        timeCell.innerHTML = "載入中";
        row.appendChild(timeCell);
        time.then(
          function(result){
            var unixTimestamp = new Date(result.timestamp * 1000)
            commonTime = unixTimestamp.toLocaleString()
            timeCell.innerHTML = commonTime;
            row.appendChild(timeCell);
          }


        )


        return row;
       }
