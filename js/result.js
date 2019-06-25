// menuリスト
$('#menu1').css({
    'background-color': '#fcfcfc',
    'border-radius': '25px 25px 0px 0px',
    'margin': '10px 10px 0px 10px'
});



///////////////////////////////////////
// 変数一覧
///////////////////////////////////////
let selectlist = [{stage:'first',value:'1回戦'},
                    {stage:'second',value:'2回戦'},
                    {stage:'best8',value:'順々決勝'},
                    {stage:'semifinal',value:'準決勝'},
                    {stage:'final',value:'決勝'}];

///////////////////////////////////////
// 読み込み時処理
///////////////////////////////////////
for(let i=0;i<selectlist.length;i++){
    let view = '<option value="'+selectlist[i]['stage']+'">'+selectlist[i]['value']+'</option>';
    $('.select').append(view);
}

///////////////////////////////////////
// VIEW
///////////////////////////////////////
// 結果リスト
function viewResultlist(){

}