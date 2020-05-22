 var url="https://docs.google.com/spreadsheets/d/1veeiGETd6oG2uZMKIgKHM0HAJMEHn_AaCij5jU8htgM/edit#gid=0";
function getTableData(){
      
      var ss = SpreadsheetApp.openByUrl(url);
      var ws = ss.getSheetByName("Data");
      var data=ws.getRange(2,2,ws.getLastRow()-1,7).getValues();
      Logger.log(data);
      return data;

}