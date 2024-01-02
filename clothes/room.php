<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>digou试衣间</title>

    <!-- 菜单相关引用文件 -->
    <script src="js/adapter.js"></script> <!--rem适配js-->
    <script src="js/menu.js"></script> <!--控制js-->

    <link rel="stylesheet" href="css/base.css"> <!--初始化文件-->
    <link rel="stylesheet" href="css/room.css"> <!--主样式-->

    <!-- 试衣间 -->
    <!-- <link rel="stylesheet" href="css/room.css"> -->

    <!-- <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script> -->
    <!-- <script src="js/cart.js" type="text/javascript"></script> -->
    <!-- <script type="application/x-javascript">
    addEventListener("load", function() { 
        setTimeout(hideURLbar, 0);
        }, false); 
        function hideURLbar(){ 
             window.scrollTo(0,1); 
        } 
    </script> -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->

<!--引入three.js三维引擎-->
<script src="http://www.yanhuangxueyuan.com/versions/threejsR92/build/three.js"></script>
<!-- 引入threejs扩展控件OrbitControls.js -->
<script src="http://www.yanhuangxueyuan.com/versions/threejsR92/examples/js/controls/OrbitControls.js"></script>
<!-- 引入obj模型加载库OBJLoader.js -->
<script src="http://www.yanhuangxueyuan.com/versions/threejsR92/examples/js/loaders/OBJLoader.js"></script>
<!-- 引入obj模型材质加载库MTLLoader.js -->
<script src="http://www.yanhuangxueyuan.com/versions/threejsR92/examples/js/loaders/MTLLoader.js"></script>

    <!-- 引入bootstrap 的样式文件 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <script src="js/room.js"></script>

    <script src="js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript">
		$(function(){
		//选择所有的一级菜单结构
		var $a = $('.level1');
		// console.log($a.length)

		$a.click(function(){
        //点击的a标签下面紧挨的ul展开
        // $(this).next().slideToggle()

        //先从点击的a标签a转移到紧挨着的ul标签（next()），将它做slideToggle动画
        //从这个ul标签转移到父级标签
        //再从这个父级标签转移到它的兄弟li标签
        //再选择这个兄弟标签的子级中的ul标签
        $(this).next().slideToggle().parent().siblings().children('ul').slideUp();
    })
})
	</script>

</head>

<body style="background-color: #E3ECFC;">

<div class="top">
    <a href="../index.php?uid=<?php echo $_REQUEST['uid']?>" class="logo">
    <img alt="" src="../images/logo.png" style="height: 50px;width: 100px" border="0"></a>
    <a href="room.php?uid=<?php echo $_REQUEST['uid']?>" class="title">滴购试衣间</a>
</div>

<div class="">
<div class="anniu">
    <input type="button" value="展开" id="btn01" class="open1" >
    <input type="button" value="收起" id="btn02" class="close1">
</div>

    <div id="">
    <!--   col-lg-2 -->
        <!--隐藏菜单-->
        
        <div class="caidan">
        <!-- 个性化调试区域 -->
            
            <div class="navBox">
                <div class="navH">
                    滴购个性化设计
                </div>  
                <ul class="menu">
                    <li>
                        <!-- 其他 -->
                        <!-- <h2 class="obtain">- 其他 -<i></i></h2>
                        <div class="secondary">                         -->
                            <button type="button" class="btn btn-default" id="all_del">删除上件</button>
                            <a class="btn btn-default" href="room.php?uid=<?php echo $_REQUEST['uid']?>" class="title">清空衣服</a>
                            <button type="button" class="btn btn-default" id="all_buy">购买</button>
                        <!-- </div> -->
                    </li>
                    <li>
                        <!-- 场景更换 -->
                        <a href="#" class="level1">场景</a>
                        <ul class="current">
                            <li>
                                <button type="button" class="btn btn-default" id="btn_snow">snow</button>
                                <button type="button" class="btn btn-default" id="btn_sky">sky</button>
                                <button type="button" class="btn btn-default" id="btn_room">room</button>
                            </li>
                            <li>
                                <button type="button" class="btn btn-default" id="btn_left">左侧光源</button>
                                <button type="button" class="btn btn-default" id="btn_qian">前方光源</button>
                                <button type="button" class="btn btn-default" id="btn_right">右侧光源</button>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <!-- 模型更换 -->
                        <a href="#" class="level1">人物</a>
                        <ul class="current">
                            <button type="button" class="btn btn-default" id="btn_man">男模</button>
                            <button type="button" class="btn btn-default" id="btn_man_del">删除男模</button>
                            <button type="button" class="btn btn-default" id="btn_woman">女模</button>
                            <button type="button" class="btn btn-default" id="btn_woman_del">删除女模</button>

                            <button type="button" class="btn btn-default" id="btn_white">白皙</button>
                            <button type="button" class="btn btn-default" id="btn_normal">健康</button>
                            <button type="button" class="btn btn-default" id="btn_black">小麦</button>
                        </ul>
                    </li>

                    <li>
                        <!-- 上衣更换 -->
                        <a href="#" class="level1">女士服饰</a>
                        <ul class="current">
                            <button type="button" class="btn btn-default" id="btn_baodunqun"><img src="images/baotunqun.png"></button>
                            <button type="button" class="btn btn-default" id="btn_nvquntao"><img src="images/wuxiuqun.png"></button>
                            <button type="button" class="btn btn-default" id="btn_changqun"><img src="images/changqun.png"></button>
                            <button type="button" class="btn btn-default" id="btn_gaotong"><img src="images/gaotong.png"></button>
                        </ul>
                    </li>
                    <li>
                        <!-- 上衣更换 -->
                        <a href="#" class="level1">男士服饰</a>
                        <ul class="current">
                            <button type="button" class="btn btn-default" id="btn_shirt"><img src="images/beixin.png"></button>
                            <button type="button" class="btn btn-default" id="btn_short"><img src="images/lanbeixin.png"></button>
                            <button type="button" class="btn btn-default" id="btn_ku"><img src="images/duanku.png"></button>
                            <button type="button" class="btn btn-default" id="btn_nanhongxie"><img src="images/hongxie.png"></button>
                            <button type="button" class="btn btn-default" id="btn_geziku"><img src="images/lvku.png"></button>
                        </ul>
                    </li>
                    
                </ul>
            <div>        
            <!-- 场景光源 -->
                    <script>
                    var scene = new THREE.Scene();

                        // -----场景更换-----
                        document.getElementById('btn_snow').onclick = function(){
                            // alert('雪天街道场景更换成功');
                            scene.add( makeSkybox( [
                                'body/cubeMaps/px.jpg', // right
                                'body/cubeMaps/nx.jpg', // left
                                'body/cubeMaps/py.jpg', // top
                                'body/cubeMaps/ny.jpg', // bottom
                                'body/cubeMaps/pz.jpg', // back
                                'body/cubeMaps/nz.jpg'  // front
                                ], 3000 ));
                        }
                        document.getElementById('btn_sky').onclick = function(){
                            // alert('天空之境场景更换成功');
                            scene.add(makeSkybox( [
                                'body/cubeMaps/6.png', // right
                                'body/cubeMaps/3.png', // left
                                'body/cubeMaps/2.png', // top
                                'body/cubeMaps/1.png', // bottom
                                'body/cubeMaps/5.png', // back
                                'body/cubeMaps/4.png'  // front
                            ], 2000 ));
                        }
                        document.getElementById('btn_room').onclick = function(){
                            // alert('雪天街道场景更换成功');
                            scene.add( makeSkybox( [
                                'body/cubeMaps/room.jpg', // right
                                'body/cubeMaps/room.jpg', // left
                                'body/cubeMaps/room.jpg', // top
                                'body/cubeMaps/room.jpg', // bottom
                                'body/cubeMaps/room.jpg', // back
                                'body/cubeMaps/room.jpg'  // front
                                ], 3000 ));
                        }

                        // -----场景结束-----

                        // -----肤色更换-----
                        document.getElementById('btn_white').onclick = function(){
                            MTLLoader.load('body/v20043z_144.mtl', function(materials) {
                                // 返回一个包含材质的对象MaterialCreator
                                console.log(materials);
                                //obj的模型会和MaterialCreator包含的材质对应起来
                                OBJLoader.setMaterials(materials);
                                OBJLoader.load('body/v20043z_141.obj', function(obj) {
                            
                                    console.log(obj);
                                    obj.scale.set(8, 8, 8); //放大obj组对象  
                                    obj.position.y = -120;
                                    scene.add(obj);//返回的组对象插入场景中

                                    document.getElementById('btn_man').onclick = function(){
                                
                                scene.add(obj);
                            }
                                })
                            })
                        }
                        document.getElementById('btn_normal').onclick = function(){
                            MTLLoader.load('body/v20043z_141.mtl', function(materials) {
                                // 返回一个包含材质的对象MaterialCreator
                                console.log(materials);
                                //obj的模型会和MaterialCreator包含的材质对应起来
                                OBJLoader.setMaterials(materials);
                                OBJLoader.load('body/v20043z_141.obj', function(obj) {
                            
                                    console.log(obj);
                                    obj.scale.set(8, 8, 8); //放大obj组对象  
                                    obj.position.y = -120;
                                    scene.add(obj);//返回的组对象插入场景中

                                    document.getElementById('btn_man').onclick = function(){
                                
                                scene.add(obj);
                            }
                                })
                            })
                        }
                        document.getElementById('btn_black').onclick = function(){
                            MTLLoader.load('body/v20043z_143.mtl', function(materials) {
                                // 返回一个包含材质的对象MaterialCreator
                                console.log(materials);
                                //obj的模型会和MaterialCreator包含的材质对应起来
                                OBJLoader.setMaterials(materials);
                                OBJLoader.load('body/v20043z_141.obj', function(obj) {
                            
                                    console.log(obj);
                                    obj.scale.set(8, 8, 8); //放大obj组对象  
                                    obj.position.y = -120;
                                    scene.add(obj);//返回的组对象插入场景中

                                    document.getElementById('btn_man').onclick = function(){
                                
                                scene.add(obj);
                            }
                                })
                            })
                        }
                        // -----肤色结束-----

                        // -----光源更换-----
                        document.getElementById('btn_left').onclick = function(){
                            //点光源
                            var point = new THREE.PointLight(0xffffff,0.8);
                            point.position.set(-400, 200, 100); //点光源位置
                            scene.add(point); //点光源添加到场景中
                        }
                        document.getElementById('btn_qian').onclick = function(){
                            //点光源
                            var point = new THREE.PointLight(0xffffff,0.8);
                            point.position.set(100, -200, 1100); //点光源位置
                            scene.add(point); //点光源添加到场景中
                        }
                        document.getElementById('btn_right').onclick = function(){
                            //点光源
                            var point = new THREE.PointLight(0xffffff,0.8);
                            point.position.set(400, 200, 100); //点光源位置
                            scene.add(point); //点光源添加到场景中
                        }
                        document.getElementById('btn_closelight').onclick = function(){
                            var remove_obj = document.getElementById("point");
                            var parent_obj = remove_obj.parentNode;
                            parent_obj.removeChild(remove_obj);
                        }
                        // -----光源结束-----
                        
                        
                        
                
                        // -----模型结束-----

                    </script>
        </div>
    </div>
</div>
    <!-- 人体模型模块 -->
    <div class="shiyijian">
    <div id="pos" class="mode"></div>
    </div>
            <!-- 场景模型 -->
            <script>
                /**
                * 创建场景对象Scene
                */
                var scene = new THREE.Scene();
                function makeSkybox( urls, size ) {
                    var skyboxCubemap = new THREE.CubeTextureLoader().load( urls );
                    skyboxCubemap.format = THREE.RGBFormat;
            
                    var skyboxShader = THREE.ShaderLib['cube'];
                    skyboxShader.uniforms['tCube'].value = skyboxCubemap;
                    console.log('执行了添加天空盒子语句');
            
                    return new THREE.Mesh(
                        new THREE.BoxGeometry( size, size, size ),
                        new THREE.ShaderMaterial({
                            fragmentShader : skyboxShader.fragmentShader, 
                            vertexShader : skyboxShader.vertexShader,
                            uniforms : skyboxShader.uniforms, 
                            depthWrite : false, 
                            side : THREE.BackSide
                        })
                    );
                }
        
                scene.add(makeSkybox( [
                    'body/cubeMaps/6.png', // right
                    'body/cubeMaps/3.png', // left
                    'body/cubeMaps/2.png', // top
                    'body/cubeMaps/1.png', // bottom
                    'body/cubeMaps/5.png', // back
                    'body/cubeMaps/4.png'  // front
                ], 2000 ));
            
                /*底部平面*/
                // var geometry = new THREE.PlaneGeometry(400, 400,10,10); //矩形平面
                var ImageLoader = new THREE.ImageLoader();// 图片加载器
                // load方法回调函数，按照路径加载图片，返回一个html的元素img对象
                ImageLoader.load('body/cubeMaps/1.png', function(img) {
                // image对象作为参数，创建一个纹理对象Texture
                var texture = new THREE.Texture(img);
                // 下次使用纹理时触发更新
                texture.needsUpdate = true;
                var material = new THREE.MeshLambertMaterial({
                    map: texture, //设置纹理贴图
                    side: THREE.DoubleSide,
                });
                var mesh = new THREE.Mesh(geometry, material); //网格模型对象Mesh
                mesh.rotation.x = -0.5 * Math.PI;
                mesh.position.y = -120;
                mesh.receiveShadow = true; //可以接收阴影
                scene.add(mesh); //网格模型添加到场景中
                });
                /**
                * OBJ和材质文件mtl加载
                */
                // -----人体模型-----

                var OBJLoader = new THREE.OBJLoader();//obj加载器
                var MTLLoader = new THREE.MTLLoader();//材质文件加载器
                MTLLoader.load('body/v20043z_141.mtl', function(materials) {
                    // 返回一个包含材质的对象MaterialCreator
                    console.log(materials);
                    //obj的模型会和MaterialCreator包含的材质对应起来
                    OBJLoader.setMaterials(materials);
                    OBJLoader.load('body/v20043z_141.obj', function(obj) {
                        console.log(obj);
                        obj.scale.set(8, 8, 8); //放大obj组对象  
                        obj.position.y = -120;
                        scene.add(obj);
                        document.getElementById('btn_man').onclick = function(){
                           
                            scene.add(obj);
                        }
                        document.getElementById('btn_man_del').onclick = function() {
                            
                            // 从 3D 图层中移除
                            scene.remove(obj);
                        }
                    })
                })

                var OBJLoader1 = new THREE.OBJLoader();//obj加载器
                var MTLLoader1 = new THREE.MTLLoader();//材质文件加载器
                MTLLoader1.load('mode/human/duanqun5.mtl', function(materials) {
                    // 返回一个包含材质的对象MaterialCreator
                    console.log(materials);
                    //obj的模型会和MaterialCreator包含的材质对应起来
                    OBJLoader1.setMaterials(materials);
                    OBJLoader1.load('mode/human/untitled.obj', function(obj) {
                
                        console.log(obj);
                        obj.scale.set(80, 80, 80); //放大obj组对象  
                        obj.position.set(0,-120,-5);

                        document.getElementById('btn_woman').onclick = function() {
                            scene.add(obj);
                        }
                        document.getElementById('btn_woman_del').onclick = function(){
                            scene.remove(obj);
                        }
                        
                        
                    })
                })
            
                // var body = new THREE.Mesh(mesh, material); //网格模型对象Mesh
            
                //  // 辅助坐标系
                //  var axisHelper = new THREE.AxisHelper(250);
                //  scene.add(axisHelper);
            
                /**
                * 光源设置
                */
                //点光源
                var point = new THREE.PointLight(0xffffff,0.8);
                point.position.set(400, 200, 100); //点光源位置
                scene.add(point); //点光源添加到场景中
                // //环境光
                var ambient = new THREE.AmbientLight(0x444444,1);
                scene.add(ambient);
                /**
                * 相机设置
                */

                var width = window.innerWidth; //浏览器窗口宽度
                var height = window.innerHeight; //浏览器窗口高度
                var k = width / height; //窗口宽高比
                var s = 300; //三维场景显示范围控制系数，系数越大，显示的范围越大
                //创建相机对象
                var camera = new THREE.OrthographicCamera(-s * k, s * k, s, -s, 1, 1000);
                camera.position.set(0, -0.5, 220); //设置相机位置
                camera.lookAt(scene.position); //设置相机方向(指向的场景对象)
                /**
                * 创建渲染器对象
                */
                // var renderer = new THREE.WebGLRenderer();
                // renderer.setSize(width, height); //设置渲染区域尺寸
                // renderer.setClearColor(0x000, 1); //设置背景颜色
                // document.body.appendChild(renderer.domElement); //body元素中插入canvas对象
            
                var renderer = new THREE.WebGLRenderer({antialias:true});
                // renderer.setSize(width, height); //设置渲染区域尺寸
                // 设置渲染区域尺寸，本质就是设置输出canvas的尺寸
                renderer.setSize(width, height);
                document.body.appendChild(renderer.domElement);

                $(function(){
                    var $btn01 = $('#btn01');
                    var $btn02 = $('#btn02');
                    var $caidan = $('.caidan');

                    $btn01.click(function(){
                        // stop把前面的动画停掉，保存最后一个
                        renderer.setSize(910, 450); //设置渲染区域尺寸
                        $caidan.stop().slideDown();
                    })

                    $btn02.click(function(){

                    // stop把前面的动画停掉，保存最后一个
                    renderer.setSize(width, height);
                    $caidan.stop().slideUp();
                    })
                })
                
                renderer.setClearColor(0xdee1e6, 1); //设置背景颜色
                // document.body.appendChild(renderer.domElement); //body元素中插入canvas对象
                // 把渲染器的渲染结果canvas对象插入到'pos'对应的div元素中
                document.getElementById('pos').appendChild(renderer.domElement);
            
                // 渲染函数
                function render() {
                renderer.render(scene, camera); //执行渲染操作
                // mesh.rotateY(0.01);//每次绕y轴旋转0.01弧度
                requestAnimationFrame(render); //请求再次执行渲染函数render，渲染下一帧
                }
                render();
                //创建控件对象  相机对象camera作为参数   控件可以监听鼠标的变化，改变相机对象的属性
                var controls = new THREE.OrbitControls(camera,renderer.domElement);
            
                //监听鼠标事件，触发渲染函数，更新canvas画布渲染效果
                // controls.addEventListener('change', render);
            </script>   

  
                <script>
                    document.getElementById('btn_baodunqun').onclick = function(){
                        MTLLoader.load('mode/clothes/baotunqun/baotunqun4.mtl', function(materials) {
                            // 返回一个包含材质的对象MaterialCreator
                            console.log(materials);
                            //obj的模型会和MaterialCreator包含的材质对应起来
                            OBJLoader.setMaterials(materials);
                            OBJLoader.load('mode/clothes/baotunqun/baotunqun4.obj', function(obj) {
                        
                                console.log(obj);
                                obj.scale.set(16, 16, 16); //放大obj组对象  
                                obj.position.set(0, -65, 2);
                                scene.add(obj);//返回的组对象插入场景中

                                document.getElementById('all_del').onclick = function(){
                                    scene.remove(obj);
                                }
                            })
                        })
                    }
                    document.getElementById('btn_shirt').onclick = function(){
                        MTLLoader.load('mode/clothes/shangyi/shangyi.mtl', function(materials) {
                            // 返回一个包含材质的对象MaterialCreator
                            console.log(materials);
                            //obj的模型会和MaterialCreator包含的材质对应起来
                            OBJLoader.setMaterials(materials);
                            OBJLoader.load('mode/clothes/shangyi/shangyi.obj', function(obj) {
                        
                                console.log(obj);
                                obj.scale.set(48, 48, 48); //放大obj组对象  
                                obj.position.set(0, -58, -5);
                                scene.add(obj);//返回的组对象插入场景中

                                document.getElementById('all_del').onclick = function(){
                                    scene.remove(obj);
                                }
                            })
                        })
                    }
                    document.getElementById('btn_short').onclick = function(){
                        MTLLoader.load('mode/clothes/shangyi/shangyi2.mtl', function(materials) {
                            // 返回一个包含材质的对象MaterialCreator
                            console.log(materials);
                            //obj的模型会和MaterialCreator包含的材质对应起来
                            OBJLoader.setMaterials(materials);
                            OBJLoader.load('mode/clothes/shangyi/shangyi2.obj', function(obj) {
                        
                                console.log(obj);
                                obj.scale.set(48, 48, 50); //放大obj组对象  
                                obj.position.set(0, -61, -4.6);
                                scene.add(obj);//返回的组对象插入场景中

                                document.getElementById('all_del').onclick = function(){
                                    scene.remove(obj);
                                }
                            })
                        })
                    }

                    document.getElementById('btn_nvquntao').onclick = function(){
                        MTLLoader.load('mode/clothes/nvquntao/nvquntao4.mtl', function(materials) {
                            // 返回一个包含材质的对象MaterialCreator
                            console.log(materials);
                            //obj的模型会和MaterialCreator包含的材质对应起来
                            OBJLoader.setMaterials(materials);
                            OBJLoader.load('mode/clothes/nvquntao/nvquntao4.obj', function(obj) {
                        
                                console.log(obj);
                                obj.scale.set(65, 65, 65); //放大obj组对象  
                                obj.position.set(-2, -120, 8);
                                scene.add(obj);//返回的组对象插入场景中

                                document.getElementById('all_del').onclick = function(){
                                    scene.remove(obj);
                                }
                            })
                        })
                    }

                    document.getElementById('btn_changqun').onclick = function(){
                        MTLLoader.load('mode/clothes/changqun/changqun5.mtl', function(materials) {
                            // 返回一个包含材质的对象MaterialCreator
                            console.log(materials);
                            //obj的模型会和MaterialCreator包含的材质对应起来
                            OBJLoader.setMaterials(materials);
                            OBJLoader.load('mode/clothes/changqun/changqun5.obj', function(obj) {
                        
                                console.log(obj);
                                obj.scale.set(18, 18, 18); //放大obj组对象  
                                obj.position.set(-2, -20, -6);
                                scene.add(obj);//返回的组对象插入场景中

                                document.getElementById('all_del').onclick = function(){
                                    scene.remove(obj);
                                }
                            })
                        })
                    }
                </script>

                <script>
                    document.getElementById('btn_geziku').onclick = function(){
                        MTLLoader.load('mode/clothes/geziku/geziku4.mtl', function(materials) {
                            // 返回一个包含材质的对象MaterialCreator
                            console.log(materials);
                            //obj的模型会和MaterialCreator包含的材质对应起来
                            OBJLoader.setMaterials(materials);
                            OBJLoader.load('mode/clothes/geziku/geziku4.obj', function(obj) {
                        
                                console.log(obj);
                                obj.scale.set(27, 22, 27); //放大obj组对象  
                                obj.position.set(0, -120, 0);
                                scene.add(obj);//返回的组对象插入场景中

                                document.getElementById('all_del').onclick = function(){
                                    scene.remove(obj);
                                }
                            })
                        })
                    }

                    document.getElementById('btn_ku').onclick = function(){
                        MTLLoader.load('mode/clothes/ku/ku4.mtl', function(materials) {
                            // 返回一个包含材质的对象MaterialCreator
                            console.log(materials);
                            //obj的模型会和MaterialCreator包含的材质对应起来
                            OBJLoader.setMaterials(materials);
                            OBJLoader.load('mode/clothes/ku/ku4.obj', function(obj) {
                        
                                console.log(obj);
                                obj.scale.set(13, 15, 16); //放大obj组对象  
                                obj.position.set(0, -50, -2);
                                scene.add(obj);//返回的组对象插入场景中

                                document.getElementById('all_del').onclick = function(){
                                    scene.remove(obj);
                                }
                            })
                        })
                    }

                </script>

                <script>
                   document.getElementById('btn_gaotong').onclick = function(){
                        MTLLoader.load('mode/clothes/gaogenxie3.mtl', function(materials) {
                            // 返回一个包含材质的对象MaterialCreator
                            console.log(materials);
                            //obj的模型会和MaterialCreator包含的材质对应起来
                            OBJLoader.setMaterials(materials);
                            OBJLoader.load('mode/clothes/gaogenxie3.obj', function(obj) {
                        
                                console.log(obj);
                                obj.scale.set(23, 19, 19); //放大obj组对象  
                                obj.position.set(0, -114, -3);
                                scene.add(obj);//返回的组对象插入场景中

                                document.getElementById('all_del').onclick = function(){
                                    scene.remove(obj);
                                }
                            })
                        })
                    }

                    document.getElementById('btn_nanhongxie').onclick = function(){
                        MTLLoader.load('mode/clothes/nanhongxie/xiezi1.mtl', function(materials) {
                            // 返回一个包含材质的对象MaterialCreator
                            console.log(materials);
                            //obj的模型会和MaterialCreator包含的材质对应起来
                            OBJLoader.setMaterials(materials);
                            OBJLoader.load('mode/clothes/nanhongxie/xiezi1.obj', function(obj) {
                        
                                console.log(obj);
                                obj.scale.set(17, 17, 17); //放大obj组对象  
                                obj.position.set(0, -120, -5);
                                scene.add(obj);//返回的组对象插入场景中

                                document.getElementById('all_del').onclick = function(){
                                    scene.remove(obj);
                                }
                            })
                        })
                    }
                </script>

            

                <script>
                    document.getElementById('all_buy').onclick = function(){
                        history.go(-1);
                    }
                    
                </script>

</body>

</html>