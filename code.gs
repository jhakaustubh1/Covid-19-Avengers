function doGet() {
  
  
  return HtmlService.createHtmlOutputFromFile("index");
  
}
function userClicked(name1,name2,name3,name4,name5,name6,name7){
  var url="https://docs.google.com/spreadsheets/d/1veeiGETd6oG2uZMKIgKHM0HAJMEHn_AaCij5jU8htgM/edit#gid=0";
  var ss =SpreadsheetApp.openByUrl(url);
  var ws=ss.getSheetByName("Data");
  ws.appendRow([new Date(),name1,name2,name3,name4,name5,name6,name7]);
  //Logger.log(name+"Someone Clicked the Button");
}