<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Калькулятор распила</title>

	<link rel="stylesheet" href="../static/css/style.css">


	<script src="../static/js/script.min.js"></script>

</head>
<body>

	<?php include ($_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/karat/frontend/_include/header.php');?>

	<div class="container">


		<div class="calculator_wrapper" id="calculatorBox">

			<h1>Заказ карты раскроя, распила ДВП, ДСП, ЛДСП, МДФ с поклейкой кромки</h1>


			<div class="settings_block">
				<div class="row">
					<p class="text">Тип и размер листа, см:</p>
					<select name="list_sizes" id="list_sizes" @change="getSourseDetails()">
						<option value="0">ЛДСП 2750x1830</option>
						<option value="1">ЛДСП 2800x2070</option>
						<option value="2">МДФ 2800x2070</option>
						<option value="1">ХДФ 2800x2070</option>
					</select>
				</div>
				<div class="row">
					<p class="text">Размеры раскроя, мм:</p>
					<p class="text">{{cuttingSizes[this.currentState.selectedDetailTypeID]}}</p>
				</div>
				<div class="row">
					<div class="custom_checkbox">
						<input id="detail_rotate" type="checkbox" checked v-model="detailRotate">
						<label for="detail_rotate" name="detail_rotate"><span>Вращение деталей:</span></label>
					</div>
					<p class="text"></p>
				</div>
<!-- 			<div class="row">
				<p class="text">ФИО:</p>
				<div class="input_box">
					<input type="text" name="client_name" id="client_name" placeholder="Иванов Иван Иванович">
				</div>
			</div>
			<div class="row">
				<p class="text">Email:</p>
				<div class="input_box">
					<input type="text" name="client_email" id="client_email" placeholder="example@shopkarat.ru">
				</div>
			</div>
			<div class="row">
				<p class="text">Телефон:</p>
				<div class="input_box">
					<input type="text" name="client_phone" id="client_phone" placeholder="+7 (___) __-__-___">
				</div>
			</div> -->
		</div>


		<div class="control_block">

			<div class="left">
				<div class="row">
					<p class="text">Листов в раскрое:</p>
					<p class="text">{{currentState.cuttingPlates}}</p>
				</div>
				<div class="row">
					<p class="text">Всего деталей:</p>
					<p class="text">{{currentState.totalDetailCount}}</p>
				</div>
				<div class="row">
					<p class="text">Площадь деталей:</p>
					<p class="text">{{currentState.totalDetailSquare}}</p>
				</div>
				<div class="row">
					<p class="text">Длина пропила:</p>
					<p class="text">{{currentState.totalDetailPerimeter}}</p>
				</div>
				<div class="row list_row">
					<p class="text">Длина кромки:</p>
					<ul class="list">
						<li><p class="text">толщиной 0,4 мм - </p><p class="text">{{currentState.edgeLength_1}}</p></li>
						<li><p class="text">толщиной 1 мм - </p><p class="text">{{currentState.edgeLength_2}}</p></li>
						<li><p class="text">толщиной 2 мм - </p><p class="text">{{currentState.edgeLength_3}}</p></li>
					</ul>
				</div>

				<button class="btn btn--orange">Отправить</button>
				<button class="btn btn--transparent">Скачать pdf</button>
			</div>


			<div class="right">
				<h2>Параметры деталей</h2>


				<div class="table">
					<div class="table_head">
						<div class="table_row">
							<div class="cell">Длина, мм</div>
							<div class="cell">Ширина, мм</div>
							<div class="cell">Количество, шт</div>
							<div class="cell">Кромка, мм</div>
							<div class="cell"></div>
						</div>
					</div>
					<div class="table_body">
						<div class="table_row" v-for="(detail, index) in detailItem">
							<div class="cell">
								<div class="input_box">
									<input
									type="number"
									:id="'detail_length_'+index"
									data-type="length"
									data-min="10"
									:data-max="currentState.cuttingSize[0]"
									@input="validateSizes"
									class="input_text"
									>
								</div>
							</div>
							<div class="cell">
								<div class="input_box">
									<input
									type="number"
									:id="'detail_width_'+index"
									data-type="width"
									data-min="10"
									:data-max="currentState.cuttingSize[1]"
									@input="validateSizes"
									class="input_text"
									>
								</div>
							</div>
							<div class="cell">
								<div class="input_box">
									<input
									type="number"
									:id="'detail_count_'+index"
									data-type="count"
									data-min="1"
									data-max="999999999999"
									@input="validateSizes"
									class="input_text"
									value="1"
									>
								</div>
							</div>
							<div class="cell">

								<div class="detail_square">
									<span class="square"></span>
									<div class="edge_group edge_top" data-position="top">
										<span class="width_0.4" @click="getEdgeType(index,1,0)">0.4</span>
										<span class="width_1" @click="getEdgeType(index,2,0)">1.0</span>
										<span class="width_2" @click="getEdgeType(index,3,0)">2.0</span>
									</div>
									<div class="edge_group edge_right" data-position="right">
										<span class="width_0.4" @click="getEdgeType(index,1,1)">0.4</span>
										<span class="width_1" @click="getEdgeType(index,2,1)">1.0</span>
										<span class="width_2" @click="getEdgeType(index,3,1)">2.0</span>
									</div>
									<div class="edge_group edge_bottom" data-position="bottom">
										<span class="width_0.4" @click="getEdgeType(index,1,2)">0.4</span>
										<span class="width_1" @click="getEdgeType(index,2,2)">1.0</span>
										<span class="width_2" @click="getEdgeType(index,3,2)">2.0</span>
									</div>
									<div class="edge_group edge_left" data-position="left">
										<span class="width_0.4" @click="getEdgeType(index,1,3)">0.4</span>
										<span class="width_1" @click="getEdgeType(index,2,3)">1.0</span>
										<span class="width_2" @click="getEdgeType(index,3,3)">2.0</span>
									</div>
								</div>

							</div>
							<div class="cell">
								<div class="detail_scheme_color"></div>
							</div>
						</div>
					</div>
				</div>


				<button class="btn btn--orange btn--icon btn--icon-plus" @click="addDetail()">Добавить деталь</button>
			</div>

		</div>





		<div class="cutting_block">
			<input type="hidden" id="platesCount" v-model="currentState.cuttingPlates" @change="platesChange()">
			<div class="plate_box" v-for="item in currentState.cuttingPlates">
				<p class="text">Лист {{item}}</p>

				<div class="size_length">
					<span class="text">{{currentState.cuttingSize[0] / 10}}</span>
					<span class="arrow"></span>
				</div>

				<div class="size_width">
					<span class="text">{{currentState.cuttingSize[1] / 10}}</span>
					<span class="arrow"></span>
				</div>

				<div class="plate_item" :style="'height:' + currentState.plateHeight + 'px'">

					<div
					class="detail_item box"
					v-for="(detail, index) in detailItemRender"
					v-if="currentState.arrPlates[index][1] == item"
					:id="'detail_item_' + detail[3] + '_' + detail[4]"
					:data-px-length="detail[6][0]"
					:data-px-width="detail[6][1]"
					:data-detail-length="detail[1]"
					:data-detail-width="detail[2]"
					:data-border-top="detail[4][0]"
					:data-border-right="detail[4][1]"
					:data-border-bottom="detail[4][2]"
					:data-border-left="detail[4][3]"
					>
					<span class="width" v-if="detail[1] >= 2000">{{detail[1]}}</span>
					<span class="height" v-if="detail[2] >= 2000">{{detail[2]}}</span>

					<span class="rotateBtn" v-if="detailRotate" @click="getDetailRotate(detail[3], detail[4])"></span>
				</div>

			</div>

		</div>
	</div>


	<pre>
		<!-- {{detailItem}} -->
		<!-- {{detailItemRender}} -->
		<!-- {{currentState}} -->
	</pre>


</div>


<script>

	var vm = new Vue({
		el: '#calculatorBox',
		data: {
			sourceDetails: [],
			cuttingSizes: ['27500x18300','28000x20700','28000x20700','28000x20700'],
			currentState: {
				selectedDetailType: '',
				selectedDetailTypeID: '',
				cuttingPlates: 1,
				totalDetailCount: 0,
				cuttingSize: [],
				content: [],
				detailsMargin: 0,
				nextPlateItem: [0],
				arrPlates: [],
			},
			detailItem: [],
			detailRotate: true,
			detailCounter: 0,
			colorHash: ['#f18700','#07bd04','#f10000','#0300d8','#ffd400','#00ffdc'],

			detailItemRender: [],
		},
		methods: {
				// Получение материалов в data
				getSourseDetails: function() {
					var item = $('#list_sizes').find('option');
					var itemArr = [];

					item.each(function(){
						itemArr.push($(this).text())
					})

					this.sourceDetails = itemArr;
					this.currentState.selectedDetailType = $('#list_sizes').find('option:selected').text();
					this.currentState.selectedDetailTypeID = $('#list_sizes').find('option:selected').index();

					this.getCuttingBlockSizes()
				},


				validateSizes: function(event) {

					var id = event.srcElement.id;
					var index = parseInt(id.split('_')[2]);

					var type = $('#'+id).attr('data-type');
					var value = parseInt($('#'+id).val());
					var min = parseInt($('#'+id).attr('data-min'));
					var max = parseInt($('#'+id).attr('data-max'));

					var typeId = null;

					switch (type) {
						case 'length': typeId = 1; break;
						case 'width': typeId = 2; break;
						case 'count': typeId = 3; break;
					}

					if ((value >= min) && (value <= max)) {
						this.detailItem[index][typeId] = value;
						$('#'+id).removeClass('warning');
					} else {
						this.detailItem[index][typeId] = 'incorrect value';
						$('#'+id).addClass('warning');
					}

					// Подсчитываем общее количество деталей
					this.getDetailCount();
					// Подсчитываем площадь и периметр деталей
					this.getDetailSizes();
					// Подсчитываем длину кромки
					this.getEdgeLength();

					// Пересобираем детали в новый массив
					this.getDetailsItemArray();


					this.$forceUpdate();
				},


				platesChange: function() {
					console.log(111111111)
				},


				// Подсчитываем общее количество деталей
				getDetailCount: function() {
					var detail = this.detailItem;
					var totalCount = 0;

					for (var i = 0; i < detail.length; i++) {
						var count = parseInt(detail[i][3]);
						totalCount = totalCount + count;
					}
					// this.currentState.totalDetailCount = totalCount;
					if (this.isAN(totalCount)) {
						this.currentState.totalDetailCount = totalCount;
					} else {
						this.currentState.totalDetailCount = '-';
					}
				},


				// Подсчитываем площадь и периметр деталей
				getDetailSizes: function () {
					var detail = this.detailItem;
					var totalDetailSquare = null;
					var totalDetailPerimeter = null;

					for (var i = 0; i < detail.length; i++) {
						var itemSquare = (detail[i][1] * detail[i][2]) * detail[i][3];
						var itemPerimetr = ((detail[i][1] * 2) + (detail[i][2] * 2)) * detail[i][3]

						totalDetailSquare = totalDetailSquare + itemSquare;
						totalDetailPerimeter = totalDetailPerimeter + itemPerimetr;
					}

					if (this.isAN(totalDetailSquare)) { this.currentState.totalDetailSquare = totalDetailSquare; }
					else { this.currentState.totalDetailSquare = '-'; }

					if (this.isAN(totalDetailPerimeter)) { this.currentState.totalDetailPerimeter = totalDetailPerimeter; }
					else { this.currentState.totalDetailPerimeter = '-'; }
				},


				// Подсчитываем длину кромки
				getEdgeLength: function() {
					var detail = this.detailItem;
					var edgeLength_1 = 0;
					var edgeLength_2 = 0;
					var edgeLength_3 = 0;

					for (var i = 0; i < detail.length; i++) {

						edgeLength_1 = 0;
						edgeLength_2 = 0;
						edgeLength_3 = 0;

						var detailLength = parseInt(detail[i][1]);
						var detailWidth = parseInt(detail[i][2]);
						var detailCount = parseInt(detail[i][3]);
						var edgeArr = detail[i][4];

						if(edgeArr[0] != 0) {
							if(edgeArr[0] == '0.4 мм') {
								edgeLength_1 = edgeLength_1 + detailLength;
							} if(edgeArr[0] == '1.0 мм') {
								edgeLength_2 = edgeLength_2 + detailLength;
							} if(edgeArr[0] == '2.0 мм') {
								edgeLength_3 = edgeLength_3 + detailLength;
							}
						} if(edgeArr[1] != 0) {
							if(edgeArr[1] == '0.4 мм') {
								edgeLength_1 = edgeLength_1 + detailWidth;
							} if(edgeArr[1] == '1.0 мм') {
								edgeLength_2 = edgeLength_2 + detailWidth;
							} if(edgeArr[1] == '2.0 мм') {
								edgeLength_3 = edgeLength_3 + detailWidth;
							}
						} if(edgeArr[2] != 0) {
							if(edgeArr[2] == '0.4 мм') {
								edgeLength_1 = edgeLength_1 + detailLength;
							} if(edgeArr[2] == '1.0 мм') {
								edgeLength_2 = edgeLength_2 + detailLength;
							} if(edgeArr[2] == '2.0 мм') {
								edgeLength_3 = edgeLength_3 + detailLength;
							}
						} if(edgeArr[3] != 0) {
							if(edgeArr[3] == '0.4 мм') {
								edgeLength_1 = edgeLength_1 + detailWidth;
							} if(edgeArr[3] == '1.0 мм') {
								edgeLength_2 = edgeLength_2 + detailWidth;
							} if(edgeArr[3] == '2.0 мм') {
								edgeLength_3 = edgeLength_3 + detailWidth;
							}
						}

						edgeLength_1 = edgeLength_1 * detailCount;
						edgeLength_2 = edgeLength_2 * detailCount;
						edgeLength_3 = edgeLength_3 * detailCount;
					}

					if (this.isAN(edgeLength_1)) { this.currentState.edgeLength_1 = edgeLength_1; }
					else { this.currentState.edgeLength_1 = '-'; }

					if (this.isAN(edgeLength_2)) { this.currentState.edgeLength_2 = edgeLength_2; }
					else { this.currentState.edgeLength_2 = '-'; }

					if (this.isAN(edgeLength_3)) { this.currentState.edgeLength_3 = edgeLength_3; }
					else { this.currentState.edgeLength_3 = '-'; }
				},

				// Проверка на число
				isAN: function(value) {
					return (value instanceof Number||typeof value === 'number') && !isNaN(value);
				},


				// Записываем выбор кромки
				getEdgeType: function(index, type, positionId) {
					var detail = this.detailItem;
					var typeText = '';

					switch (type) {
						case 1: typeText = '0.4 мм'; break;
						case 2: typeText = '1.0 мм'; break;
						case 3: typeText = '2.0 мм'; break;
					}

					$('.table_row:nth-child('+(index + 1)+')').find('.edge_group').eq(positionId).find('span').removeClass('selected');


					$('.table_row:nth-child('+(index + 1)+')').find('.square').addClass('position_'+positionId);
					$('.table_row:nth-child('+(index + 1)+')').find('.edge_group').eq(positionId).find('span:nth-child('+type+')').addClass('selected');


					this.detailItem[index][4][positionId] = typeText;
					this.$forceUpdate();

					this.getEdgeLength();
					setTimeout(this.getDetailOnPlate, 10);
				},


				getDetailOnPlate: function() {
					var cuttingSize = this.currentState.cuttingSize;
					var margin = 0;
					var details = this.detailItemRender;

					for (var i = 0; i < details.length; i++) {
						var el = $('#detail_item_' + details[i][3] + '_' + details[i][4]);

						var indexG = details[3];

						el.removeClass('bd-top');
						el.removeClass('bd-right');
						el.removeClass('bd-bottom');
						el.removeClass('bd-left');

						var plateWidth = $('.plate_item').width();
						var plateHeight = $('.plate_item').height();

						var cuttingLength = parseInt(cuttingSize[0]);
						var cuttingWidth = parseInt(cuttingSize[1]);

						var width = parseInt(details[i][2]);
						var length = parseInt(details[i][1]);

						if (details[i][5][0] != '0') { el.addClass('bd-top'); }
						if (details[i][5][1] != '0') { el.addClass('bd-right'); }
						if (details[i][5][2] != '0') { el.addClass('bd-bottom'); }
						if (details[i][5][3] != '0') { el.addClass('bd-left'); }

						margin = 4 * plateWidth / cuttingLength;

						var lengthMod = length * plateWidth / cuttingLength;
						var widthMod = width * plateHeight / cuttingWidth;

						// el.css('width',lengthMod+'px');
						// el.css('height',widthMod+'px');
						// el.css('margin',margin+'px');
						el.css('background-color',this.colorHash[details[i][3]]);

						this.detailItemRender[i][6].push(lengthMod);
						this.detailItemRender[i][6].push(widthMod);
					}


					this.currentState.detailsMargin = margin;

					setTimeout(this.nested, 10);
				},

				getDetailPosition: function() {
					var details = this.detailItemRender;
					var margin = this.currentState.detailsMargin;
					var plateWidth = this.currentState.plateWidth;
					var plateHeight = this.currentState.plateHeight;



					// Стартово положение top и left равняется расстоянию между деталями
					var posX = margin;
					var posY = margin;
					var startItem = 0;

					var probCoord = [];

					var id = details.length - 1;


					for (var id = startItem; id < details.length; id++) {

						var fitFlag = false;
						var plateWidthFlag = false;
						var plateHeightFlag = true;
						var interSectFlag = true;

						// Если деталь первая
						if (id == 0) {
							// this.detailItemRender[id][6].push(posX);
							// this.detailItemRender[id][6].push(posY);
							// this.detailItemRender[id][6].push(true);
						}
						// Если деталь не первая
						if (id > 0) {

							// Верняя правая координата предыдущей детали
							var prevX_tR = details[id-1][6][2] + details[id-1][6][0];
							var prevY_tR = details[id-1][6][3];

							// Нижняя левая координата предыдущей детали
							var prevX_bL = details[id-1][6][2] + details[id-1][6][0];
							var prevY_bL = details[id-1][6][3] + details[id-1][6][1];

							// Проверка на попадание в ширину
							if ((prevX_tR + details[id][6][0] + margin) < plateWidth) {

								// Добавление в тот же ряд
								plateWidthFlag = true;
								posX = prevX_tR + margin;
								posY = prevY_tR;

							} else {
								var prodItem = [];
								for (var i = details.length - 2; i >= 0; i--) {
									if(details[i][6][4]) {

										// Добавление в массив нижних левых коорд
										prevX_bL = details[i][6][2];
										prevY_bL = details[i][6][3] + details[i][6][1];
										prodItem.push([prevX_bL,prevY_bL]);

									}
								}
								var result = this.getMinTopLeft(prodItem);

								plateWidthFlag = true;
								posX = result[0];
								posY = result[1] + margin;

								console.log(result);
							}



							// Проверка попадает ли след деталь в оставшуюся ширину + Проверка, попадает ли деталь в высоту.


							// Проверка, попадает ли деталь в оставшуюсь ширину, если отступить высоту одной из деталей


							// Проверка, попадает ли в ширину, если взять от left 0


							// Проверка,

						}

						if (plateWidthFlag && plateHeightFlag && interSectFlag) {
							fitFlag = true;
						}

						if (fitFlag) {
							// this.detailItemRender[id][6].push(posX);
							// this.detailItemRender[id][6].push(posY);
							// this.detailItemRender[id][6].push(true);
						}
					}






					// При добавлении детали необходимо провододить сканирование нижней левой и верхней правой точки каждой детали как стартовые координаты сканирования, естественно с прибавлением к ним отступа margin.

					// Сканирование начинаешь с с правой верхней точки. Далее прибавляешь к координатам ширину новой детали, проверяешь влезает ли в лист, если ок - то ок. Верхие точки проверяются в порядке возрастания id детали.

					// Если не влезает - начинаешь проверять нижние левые точки, добавляя подходящий top и left в двумерный массив. Далее выбираешь группу с минимальным top и записываешь это в detailItemRender детали и переходишь к следующей детали.

					// Так же на каждом из этапов необходимо добавить проверку по общей высоте листа.

					// Т.Е. необходимо брать координаты x и y, проверять, нет ли под ними детали, далее прибавлять к ним ширину и высоту новой детали и так же проверять. Надо проводить проверку во всех 4-х точках.

					// Проверка подходящего места для детали основывается также на переборе заполненных массивов с деталями и сравнения (x + width + margin) и (y + height + margin) новой детали с информацией записанной в массиве.

					// Т.О. Тебе необходимо сравнить координаты нижнего левого, нижнего правого и верхнего правого угла новой детали с положением деталей на листе.

					// this.nested();


				},

				nested: function() {
					var self = this;
					$(".plate_item").each(function(){
						$(this).nested({
							selector: '.box',
							resizeToFit: false,
							minWidth: 10,
							gutter: 0.14,
							plateWidth: self.currentState.plateWidth,
							plateHeight: self.currentState.plateHeight,
							cuttingSize: self.currentState.cuttingSize,
						});
					})

					// setTimeout(this.checkPlateFit, 100);
				},


				checkPlateFit: function() {
					var details = this.detailItemRender;
					var plates = this.currentState.cuttingPlates;
					var plateHeight = this.currentState.plateHeight;
					var margin = this.currentState.detailsMargin;
					var topArr = [];
					var plateArr = this.currentState.arrPlates;

					// var lastID = details.length - 1;


					for (var i = 0; i < details.length; i++) {
						var el = $('#detail_item_' + details[i][3] + '_' + details[i][4]);
						var elBottom = parseInt(details[i][6][1]) + parseInt(el.css('top')) + margin;
						console.log(elBottom);

						if (elBottom < plateHeight * plates) {
							console.log('first plate');

							// this.currentState.arrPlates[i].push(1);
						} else if (elBottom >= plateHeight * plates) {
							console.log('new plate');
							plates = 2
							plateArr[i][1] = 2;
						}
					}

					console.log(plateArr)

					this.currentState.cuttingPlates = plates;
					this.currentState.arrPlates = plateArr;
				},



				getDetailsItemArray: function() {
					var details = this.detailItem;
					var arrRender = [];
					var arrPlates = []
					var startPlate = this.currentState.nextPlateItem;
					var arr = this.currentState.arrPlates;

					for (var i = 0; i < details.length; i++) {
						var count = details[i][3];
						plate = details[i][5];

						for (var j = 0; j < count; j++) {

							for (var k = 0; k < this.currentState.nextPlateItem.length; k++) {
								var start = this.currentState.nextPlateItem[k];

								if (j >= start) {
									plate = k + 1;
								}
							}
							var detailItemPlate = [j, 1];
							var itemArr = [details[i][0], details[i][1], details[i][2], i, j, details[i][4], [], 1]
							arrRender.push(itemArr);
							arrPlates.push(detailItemPlate);
						}
					}

					this.detailItemRender = arrRender;
					this.currentState.arrPlates = arrPlates;

					setTimeout(this.getDetailOnPlate, 10);
					// setTimeout(this.nested, 100);
				},

				// Функция вращения
				getDetailRotate: function(group, item) {
					var i = this.detailItem.length;
					var detailItem = this.detailItem[group];
					var detailNew = this.detailItem[group];

					var countGroup = this.detailItem[group][3] - 1;
					this.detailItem[group][3] = countGroup;

					var edgeArrRotate = this.borderRotate(detailItem[4]);

					var detailNew = ['detail_'+i+'',detailItem[2],detailItem[1],1,edgeArrRotate,this.currentState.cuttingPlates];

					var length = detailNew[1];
					var width = detailNew[2];


					var j = this.checkDetailRepeat(length, width, edgeArrRotate);

					if(this.isAN(j)) {
						var counter = this.detailItem[j][3] + 1;
						this.detailItem[j][3] = counter;

						if(this.detailItem[group][3] == 0) {
							this.detailItem.splice(group, 1);
						}

					} else {
						// Добавление нового
						this.detailItem.push(detailNew);

						if(this.detailItem[group][3] == 0) {
							this.detailItem.splice(group, 1);
						}
					}

					this.getDetailsItemArray();

					setTimeout(this.getDetailOnPlate, 10);
					setTimeout(this.textFieldUpdate, 10);
					this.$forceUpdate();
				},


				// Обновление рядов с деталями и полей ввода
				textFieldUpdate: function() {
					var details = this.detailItem;

					for (var i = 0; i < details.length; i++) {
						var square_block = $('.table_body').find('.table_row').eq(i).find('.detail_square');

						$('#detail_length_'+i).attr('value',details[i][1]);
						$('#detail_width_'+i).attr('value',details[i][2]);
						$('#detail_count_'+i).attr('value',details[i][3]);

						var edge = details[i][4];
						square_block.find('.square').removeClass('position_0');
						square_block.find('.square').removeClass('position_1');
						square_block.find('.square').removeClass('position_2');
						square_block.find('.square').removeClass('position_3');
						square_block.find('span').removeClass('selected');



						for (var j = 0; j < edge.length; j++) {

							if(parseInt(edge[j]) != 0) {
								square_block.find('.square').addClass('position_'+j);

								var typeID;

								switch (edge[j]) {
									case '0.4 мм': typeID = 0; break;
									case '1.0 мм': typeID = 1; break;
									case '2.0 мм': typeID = 2; break;
								}

								square_block.find('.edge_group').eq(j).find('span').eq(typeID).addClass('selected');
							}
						}

					}
				},


				// Функция поиска подобных элементов
				checkDetailRepeat: function(length, width, edgeArr) {
					var details = this.detailItem;
					var j = details.length;
					var result = false;

					for (var i = 0; i < j; i++) {

						if((parseInt(details[i][1]) == length) && (parseInt(details[i][2]) == width) && this.arrayCompare(details[i][4], edgeArr)) {
							result = i;
						}

					}
					return result;
				},

				// функция сравнения массивов
				arrayCompare: function(arr1, arr2) {
					var flag = true;
					if(arr1.length == arr2.length) {

						for (var i = 0; i < arr2.length; i++) {

							if(arr1[i] != arr2[i]) {
								flag = false;
							}
						}

					}
					return flag;
				},

				// Замена информации о кромке при вращении детали
				borderRotate: function(edgeArr) {
					var edgeArrRotate = [];

					edgeArrRotate[0] = edgeArr[1];
					edgeArrRotate[1] = edgeArr[2];
					edgeArrRotate[2] = edgeArr[3];
					edgeArrRotate[3] = edgeArr[0];

					return edgeArrRotate;
				},




				// Определение размеров блока для деталей
				getCuttingBlockSizes: function() {
					var plateWidth = $('.plate_item').width();
					var cuttingSize = this.cuttingSizes[this.currentState.selectedDetailTypeID].split('x');
					var cuttingLength = parseInt(cuttingSize[0]) * 10;
					var cuttingWidth = parseInt(cuttingSize[1]) * 10;

					var plateHeight = plateWidth * cuttingWidth / cuttingLength;
					// $('.plate_item').css('height', plateHeight + 'px');

					this.currentState.plateWidth = plateWidth;
					this.currentState.plateHeight = plateHeight;
					this.currentState.cuttingSize = cuttingSize;
				},

				// Добавление детали
				addDetail: function() {
					var i = this.detailCounter;

					var detail = ['detail_'+i+'','','','1',['0','0','0','0'],this.currentState.cuttingPlates];

					this.detailItem.push(detail);
					this.detailCounter ++;
				},

			},
			watch:{
				'currentState.nextPlateItem'(){
					this.getDetailsItemArray();
				}
			},
			mounted() {
				this.getSourseDetails();
			},

		});

	</script>

</div>


</div>


<?php include ($_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/karat/frontend/_include/footer.php');?>

</body>
</html>
