; (function (d, $) {    

    var jQdm_graph;

    jQdm_graph = function () {

        var _root = this;


        //alert($('.votes:eq(2)').html());

        var group_1 = $('.group_vote:eq(0)').html();
        var vote_1 = parseInt($('.votes:eq(0)').html());
        var group_2 = $('.group_vote:eq(1)').html();
        var vote_2 = parseInt($('.votes:eq(1)').html());
        var group_3 = $('.group_vote:eq(2)').html();
        var vote_3 = parseInt($('.votes:eq(2)').html());
        var group_4 = $('.group_vote:eq(3)').html();
        var vote_4 = parseInt($('.votes:eq(3)').html());
        var group_5 = $('.group_vote:eq(4)').html();
        var vote_5 = parseInt($('.votes:eq(4)').html());
        var group_6 = $('.group_vote:eq(5)').html();
        var vote_6 = parseInt($('.votes:eq(5)').html());
        var group_7 = $('.group_vote:eq(6)').html();
        var vote_7 = parseInt($('.votes:eq(6)').html());

        var width=$(window).width();

        /*
        var sum = 0;
        for(var i = 7 ; i < 50 ; i++) {
            if($('.votes:eq(' + i + ')').html() != null) {
                sum += parseInt($('.votes:eq(' + i + ')').html());
            }
        }*/


        //
        // 圓餅圖
        //

        this.chart_setting = { // 動畫圓餅圖

            type: "pie", //　設定圖形型態
            margins: [10, 10, 10, 10],　// [10,10,10,10]　設定圖形margin
            
            
            labels: [ // 橫軸Label
                width < 768 ? group_1.substring(0, 7): group_1, 
                width < 768 ? group_2.substring(0, 7): group_2, 
                width < 768 ? group_3.substring(0, 7): group_3, 
                width < 768 ? group_4.substring(0, 7): group_4, 
                width < 768 ? group_5.substring(0, 7): group_5, 
                width < 768 ? group_6.substring(0, 7): group_6, 
                width < 768 ? group_7.substring(0, 7): group_7, /*
                '其它', */
            ],


            values: { //各圖的值
                serie1: [vote_1, vote_2, vote_3, vote_4, vote_5, vote_6, vote_7/*, sum*/]
            },

            legend: [ // 各圖的圖標
                group_1, group_2, group_3, group_4, group_5, group_6, group_7/*, '其它'*/
            ],

            tooltips: { // 各圖的tooltip
                serie1: [group_1 + " : " + vote_1, group_2 + " : " + vote_2, group_3 + " : " + vote_3, group_4 + " : " + vote_4, group_5 + " : " + vote_5, group_6 + " : " + vote_6, group_7 + " : " + vote_7/*, '其它'*/]
            },

            startAngle: 270, // 0 圓餅圖開始繪製的角度
            clockwise: true, // false 是否順時針
            valueThresold: 0.006, // 0.006

            defaultSeries: { // 設定圓餅圖

                r: 1, // 1 圓餅圖大小比例。設定1~-1，-1為甜甜圈形狀

                plotProps: {
                    "stroke-width": 0,
                    opacity: 1
                },

                values: [ // 各圖形設定
                  {
                      plotProps: {
                          fill: "#e74c3c"
                      }
                  },
                  {
                      plotProps: {
                          fill: "#e67e22"
                      }
                  },
                  {
                      plotProps: {
                          fill: "#f1c40f"
                      }
                  },
                  {
                      plotProps: {
                          fill: "#27ae60"
                      }
                  },
                  {
                      plotProps: {
                          fill: "#00b0f0"
                      }
                  },
                  {
                      plotProps: {
                          fill: "#2980b9"
                      }/*,
                      label: {　// 讓label清楚顯示，所以調整其預設位置
                          offset: [50, 0]
                      }*/
                  }
                  ,
                  {
                      plotProps: {
                          fill: "#a365d1"
                      },
                      label: {　// 讓label清楚顯示，所以調整其預設位置
                          offset: [50, 0]
                      }
                  }
                ],

                label: { // 於圖上顯示label
                    active: true,
                    offset: [40, 10],
                    props: {
                        fill: "#000"
                    }
                },

                highlight: { // 滑鼠移入時的動作
                    move: 10,
                    newProps: {
                    },
                    overlayProps: {
                        "fill": "#fff",
                        "fill-opacity": .3,
                        "stroke-width": 0
                    }
                },

                tooltip: { //　圖形tooltip的設定
                    active: true,  // true 是否支援tooltip？
                    width: 360, // tooltip寬度
                    height: 40,  //　tooltip高度
                    roundedCorners: 5,  // 設定tooltip圓角（px）
                    padding: [10, 10], // [6, 6] tooltip padding，同CSS依照[縱、橫]的順序
                    offset: [10, 10], // [20, 0] tooltip margin，同CSS依照[縱、橫]的順序
                    frameProps: {  // tooltip顯示
                        fill: "rgba( 0, 0, 0, 0.7)",  // white 背景色
                        "stroke-width": 4 // 2 框線顏色
                    },
                    contentStyle: {  // tooltip的內容樣式
                        "font-family": "微軟正黑體", // font
                        "font-size": "16px",  // 12px font size
                        "line-height": "24px",  // 16px 行高
                        "text-align": "center",
                        color: "#fff"  // black 文字顏色
                    }
                },

                startAnimation: {
                    active: true,
                    type: "avg",
                    speed: 1200,
                    delay: 0,
                    easing: ''
                }

            },

            features: {　// 設定部分的設定

                animation: {
                    active: true,
                    propsFrom: {
                        "opacity": 0
                    },
                    propsTo: {
                        "opacity": 1
                    },
                    speed: 600,
                    delay: 1000
                },


                legend: {　// 圖標額外設定
                    x: 10, // 'auto' 圖標的x作標，當horizontal為true時，auto有效
                    y: 10,
                    width: 270, // horizontal為true時，auto有效
                    height: 100,
                    itemWidth: "fixed",
                    // fixed 圖標各項目的寬度，fixed為固定。
                    margins: [0, 0, 0, 0],
                    dotMargins: [10, 5], // sx, dx
                    borderProps: {
                        fill: "rgba( 255, 255, 255, 0.5)",
                        stroke: "black",
                        "stroke-width": 0
                    },
                    // 下面defaultSeries設定為優先
                    dotType: 'rect',
                    dotWidth: 10, dotHeight: 10, dotR: 4,
                    dotProps: {
                        type: "rect",
                        width: 10,
                        height: 10,
                        "stroke-width": 0
                    },
                    textProps: { font: '12px 微軟正黑體', fill: "#000" }
                }
            }

        };



        $(window).on('load',function(){            
            $('#chart').hide().chart('clear').fadeIn(500).chart(_root[replaceString('#chart') + '_setting']);
        });


        // 文字列置換処理
        function replaceString(_str, _bf, _af, _flg) {
            var _reg = new RegExp(_bf || '[\\.#]', _flg || '');
            return _str ? _str.replace(_reg, _af || '') : false;
        }
          
          

        
    }

    new jQdm_graph();

})(document, jQuery);


