//Url input field
var YT_Url = document.getElementById//("YTUrl");

//add enter-button functionality to button
input.addEventListener("keyup", function(event) {
  event.preventDefault();
  if (event.keyCode === 13) {
    document.getElementById/*("btn")/*/.click();
  }
});

//button click leads to getYT function
document.getElementById/*("btn")*/.addEventListener("click", getYT);

//getYT function
function get_YT(){

    //get JSON from page
    YT_JSON_Location="https://www.youtube.com/oembed?url="+YTUrl+"&format=json";
    var xhr = new XMLHttpRequest();
    xhr.open('GET', YT_JSON_Location, true);

    //log xhr
    console.log(xhr);

    //if GET ok, Save JSON in YT_JSON
    xhr.onload = function(){
        if(this.status == 200){
            var YT_JSON = JSON.parse(this.responseText);

            //save author,iframe-snippet,title and thumbnail url in var
            var YT_Author=YT_JSON.author_name;
            var YT_Iframe=YT_JSON.html;
            var YT_Title=YT_JSON.title;
            var YT_Thumbnail=YT_JSON.thumbnail_url;

        }
    }

    xhr.send();
};
