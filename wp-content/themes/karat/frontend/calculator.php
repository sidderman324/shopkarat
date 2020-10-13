<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Калькулятор распила</title>

	<link rel="stylesheet" href="../static/css/style.css?v=<?php echo time(); ?>">
	<script src="/wp-content/themes/karat/static/js/script.min.js?v=<?php echo time(); ?>"></script>

	<!-- <script src="/_source_dev/js/jquery-3.1.1.js"></script> -->

	<script src="/_source_dev/js/isotope.pkgd.js"></script>
	<script src="/_source_dev/js/vue.js"></script>
	<script src="/_source_dev/js/html2pdf.bundle.js"></script>

	<!-- <script src="/wp-content/themes/karat/static/js/isotope.pkgd.js"></script> -->
	<!-- <script src="/wp-content/themes/karat/static/js/vue.js"></script> -->
	<!-- <script src="/wp-content/themes/karat/static/js/html2pdf.bundle.js"></script> -->

</head>
<body style="overflow: hidden;">

	<?php include ($_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/karat/frontend/_include/header.php');?>

	<div class="container">


		<div class="calculator_wrapper" :class="{ simple_view: pdfScanFlag }" id="calculatorBox">

			<div class="head" v-if="pdfScanFlag">
				<div class="logo_wrapper"><img src="/wp-content/themes/karat/static/imgs/main_logo_orange.svg" alt=""></div>

				<div class="contacts_block">
					<div class="item">
						<p class="block_title">Краснодар</p>
						<a href="tel:+78612050519" class="phone_header">8(861)205-05-19</a>
						<a href="tel:+78612050592" class="phone_header">8(861)205-05-92</a>
						<p class="text">г. Краснодар, ул. Круговая 24/10</p>
					</div>

					<div class="item">
						<p class="block_title">Симферополь</p>
						<a href="tel:+78612050519" class="phone_header">8(978)874-81-40</a>
						<a href="tel:+78612050592" class="phone_header">8(978)896-22-40</a>
						<p class="text">Республика Крым, г. Симферополь, ул. Буденного, 32</p>
					</div>
				</div>
			</div>

			<h1>Заказать карту раскроя и распила ЛДСП, МДФ, ХДВ с поклейкой кромки</h1>


			<div class="settings_block">
				<div class="row">
					<p class="text">Тип и размер листа, мм:</p>
					<select name="list_sizes" id="list_sizes" @change="getSourseDetails()">
						<option value="0">ЛДСП 2750x1830</option>
						<option value="1">ЛДСП 2800x2070</option>
						<option value="2">МДФ 2800x2070</option>
						<option value="1">ХДФ 2800x2070</option>
					</select>

				</div>
				<div class="row" v-if="!pdfScanFlag">
					<p class="text">Размеры раскроя, мм:</p>
					<p class="text">{{cuttingSizes[this.currentState.selectedDetailTypeID]}}</p>
				</div>
				<div class="row avoid-all" v-if="!pdfScanFlag">
					<div class="custom_checkbox">
						<input id="detail_rotate" type="checkbox" checked v-model="detailRotate">
						<label for="detail_rotate" name="detail_rotate"><span>Вращение деталей:</span></label>
					</div>
					<p class="text"></p>
				</div>
				<div class="row" v-if="pdfScanFlag">
					<p class="text">Выбранный лист:</p>
					<p class="text">{{currentState.selectedDetailType}}</p>
				</div>
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
						<p class="text"><div v-if="currentState.totalDetailSquare">{{currentState.totalDetailSquare / 1000000}} м<sup>2</sup></div></p>
					</div>
					<div class="row">
						<p class="text">Длина пропила:</p>
						<p class="text"><div v-if="currentState.totalDetailPerimeter">{{currentState.totalDetailPerimeter}} м</div></p>
					</div>
					<div class="row list_row">
						<p class="text">Длина кромки:</p>
						<ul class="list">
							<li>
								<div v-if="currentState.edgeLength_1">
									<p class="text">толщиной 0,4 мм</p>
									<p class="text" v-if="isAN(currentState.edgeLength_1)">{{(currentState.edgeLength_1 * 1.2).toFixed(1)}} м</p>
								</div>
							</li>
							<li>
								<div v-if="currentState.edgeLength_2">
									<p class="text">толщиной 1,0 мм</p>
									<p class="text" v-if="isAN(currentState.edgeLength_2)">{{(currentState.edgeLength_2 * 1.2).toFixed(1)}} м</p>
								</div>
							</li>
							<li>
								<div v-if="currentState.edgeLength_3">
									<p class="text">толщиной 2,0 мм</p>
									<p class="text" v-if="isAN(currentState.edgeLength_3)">{{(currentState.edgeLength_3 * 1.2).toFixed(1)}} м</p>
								</div>
							</li>
						</ul>
					</div>
					<button class="btn btn--orange" @click="showPopup()" v-if="!pdfScanFlag">Отправить</button>
					<button class="btn btn--transparent" @click="generatePDF()" v-if="!pdfScanFlag">Скачать pdf</button>
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
								<div class="cell" v-if="!pdfScanFlag"></div>
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
										data-min="1"
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
										data-min="1"
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
								<div class="cell" v-if="!pdfScanFlag">
									<!-- <div class="detail_scheme_color"></div> -->
									<span class="close_btn" @click="removeGroup(index)"></span>
								</div>
							</div>
						</div>
					</div>


					<button class="btn btn--orange btn--icon btn--icon-plus" @click="addDetail()" v-if="!pdfScanFlag">Добавить деталь</button>
				</div>

			</div>


			<div class="cutting_block">
				<!-- <input type="text" id="platesCount" data-value="1"> -->
				<div class="plate_box" v-for="item in currentState.cuttingPlates">
					<p class="text">Лист {{item}}</p>

					<div class="size_length">
						<span class="text">{{currentState.cuttingSize[0]}}</span>
						<span class="arrow"></span>
					</div>

					<div class="size_width">
						<span class="text">{{currentState.cuttingSize[1]}}</span>
						<span class="arrow"></span>
					</div>

					<div class="plate_item grid" :class="'grid_'+item" :style="'height:' + currentState.plateHeight + 'px; width:' + currentState.plateWidth + 'px'">

						<div
						class="detail_item box grid-item"
						:id="'detail_' + detail[3] + '_' + detail[4]"
						v-for="(detail, index) in detailItemRender"
						v-if="detail[7] == item"
						:data-border-top="detail[4][0]"
						:data-border-right="detail[4][1]"
						:data-border-bottom="detail[4][2]"
						:data-border-left="detail[4][3]"
						:style="'height:' + detail[6][0] + 'px; width:' + detail[6][1] + 'px'"
						>
						<span class="width" v-if="detail[1] >= 200">{{detail[1]}}</span>
						<span class="height" v-if="detail[2] >= 200">{{detail[2]}}</span>

						<span class="rotateBtn" v-if="detailRotate" @click="getDetailRotate(detail[3], detail[4])"></span>
					</div>


				</div>

			</div>
		</div>


		<!-- Окно оформления предзаказа -->
		<div class="popup_block popup_block--calc" :class="{ visible: popupVisible }" v-if="!popupRemove">
			<span class="close_btn js-popup-close" @click="hidePoup()"></span>

			<form
			action="/wp-content/themes/karat/frontend/sendmail.php"
			method="POST"
			class="ordering ordering--popup"
			v-on:submit="mailGenerate()"
			enctype="multipart/form-data">

			<p class="popup_title">Отправка заказа</p>

			<div class="input_box input_box--square input_box--black input_box--narrow">
				<input type="text" class="input_text js-calc-input" name="calc_name" placeholder="Фамилия Имя Отчество">
			</div>
			<div class="input_box input_box--square input_box--black input_box--narrow">
				<input type="text" class="input_text js-calc-input js-email-validate" name="calc_email" placeholder="Email">
			</div>
			<div class="input_box input_box--square input_box--black input_box--narrow">
				<input type="text" class="input_text js-calc-input js-phone-validate" name="calc_phone" placeholder="Телефон" required>
			</div>
			<div class="input_box input_box--square input_box--black">
				<textarea name="name" placeholder="Комментарий" name="calc_message" rows="5" class="input_text input_text--textarea"></textarea>
			</div>

			<div class="select">
				<input class="select_input js-calc-input" type="hidden" name="calc_select_input" id="calc_select_input">
				<div class="select_head">Выберите ближайший к Вам филиал</div>
				<ul class="select_list" style="display: none;">
					<li class="select_item" data-value="Краснодар">Краснодар</li>
					<li class="select_item" data-value="Симферополь">Симферополь</li>
				</ul>
			</div>


			<div class="custom_checkbox custom_checkbox--square custom_checkbox--square-left">
				<input id="calc_confirmation_pre_order" type="checkbox">
				<label for="calc_confirmation_pre_order" name="calc_confirmation_pre_order"><span>Я согласен на <a href="#"> обработку персональных данных</a></span></label>
			</div>

			<button class="btn btn--orange">ОТПРАВИТЬ</button>
		</form>

	</div>

	<div class="popup_bgr js-popup-close" :class="{ visible: popupVisible }" @click="hidePoup()" v-if="!popupRemove"></div>




	<pre>
		<!-- {{detailItem}} -->

		<!-- {{detailItemRender}} -->
		<!-- {{currentState.arrPlates}} -->
	</pre>


</div>

<script>

var vm = new Vue({
	el: '#calculatorBox',
	data: {
		timer: 0,
		popupVisible: false,
		popupRemove: false,
		pdfScanFlag: false,
		sourceDetails: [],
		plates: 1,
		cuttingSizes: ['2750x1830','2800x2070','2800x2070','2800x2070'],
		currentState: {
			mansoryFlag: true,
			selectedDetailType: '',
			selectedDetailTypeID: '',
			cuttingPlates: 1,
			totalDetailCount: 0,
			cuttingSize: [],
			content: [],
			detailsMargin: 0,
			nextPlateItem: [0],
			arrPlates: [],
			arrPlatesTemp: [],
		},
		detailItem: [],
		detailRotate: true,
		detailCounter: 0,
		colorHash: ['rgba(241, 135, 0, .5)','#07bd04','#f10000','#0300d8','#ffd400','#00ffdc'],

		detailItemRender: [],
		detailsId: [],
		allowFlag: false,

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





		// Определение размеров блока для деталей
		getCuttingBlockSizes: function() {
			var plateWidth = $('.plate_item').width();
			var cuttingSize = this.cuttingSizes[this.currentState.selectedDetailTypeID].split('x');
			var cuttingLength = parseInt(cuttingSize[0]) * 10;
			var cuttingWidth = parseInt(cuttingSize[1]) * 10;

			var plateHeight = plateWidth * cuttingWidth / cuttingLength;

			this.currentState.plateWidth = plateWidth;
			this.currentState.plateHeight = plateHeight;
			this.currentState.cuttingSize = cuttingSize;
		},





		// Добавление детали
		addDetail: function() {
			var i = this.detailCounter;

			if (i > 0) {

				if ((this.detailItem[i-1][1] == "") || (this.detailItem[i-1][2] == "")) {
					toastr.error('Размеры детали не заполнены');
				} else if((this.detailItem[i-1][1] == "incorrect value") || (this.detailItem[i-1][2] == "incorrect value")) {
					toastr.error('Размеры детали некооректны');
				} else {
					var detail = ['detail_'+i+'','','','1',['0','0','0','0'],this.currentState.cuttingPlates];
					this.detailItem.push(detail);
					this.detailCounter ++;
				}

			} else {

				var detail = ['detail_'+i+'','','','1',['0','0','0','0'],this.currentState.cuttingPlates];
				this.detailItem.push(detail);
				this.detailCounter ++;

			}
		},

		detailCounterRefresh: function() {
			this.detailCounter = this.detailItem.length;
		},






		// Заполение параметров детали
		validateSizes: function(event) {

			var self = this;
			self.allowFlag = false;

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

			} else if ((value <= min) && (value <= max)) {

				// toastr.warning('Значение слишком маленькое')
				this.detailItem[index][typeId] = 'incorrect value';
				$('#'+id).addClass('warning');

			} else if ((value >= min) && (value > max)) {

				toastr.warning('Значение слишком большое')
				this.detailItem[index][typeId] = 'incorrect value';
				$('#'+id).addClass('warning');

			}


			if((this.detailItem[index][1] > 10) && (this.detailItem[index][2] > 10)) {
				// собираем информацию о деталях на раскрое
				this.getDetailInfo();
				// Пересобираем детали в новый массив
				this.getDetailsItemArray();
				// Сохраняем в хранилище
				this.localStorageSaving();

				this.$forceUpdate();
			}
		},






		// собираем информацию о деталях на раскрое
		getDetailInfo: function() {
			var detail = this.detailItem;
			// Количество деталей
			var totalCount = 0;
			// Площадь и периметр
			var totalDetailSquare = null;
			var totalDetailPerimeter = null;
			// Длина кромки
			var edgeLength_1 = 0;
			var edgeLength_2 = 0;
			var edgeLength_3 = 0;

			for (var i = 0; i < detail.length; i++) {
				// Количество деталей
				var count = parseInt(detail[i][3]);
				totalCount = totalCount + count;

				// Площадь и периметр
				var itemSquare = (detail[i][1] * detail[i][2]) * detail[i][3];
				var itemPerimetr = ((detail[i][1] * 2) + (detail[i][2] * 2)) * detail[i][3]

				totalDetailSquare = totalDetailSquare + itemSquare;
				totalDetailPerimeter = totalDetailPerimeter + itemPerimetr;


				// Длина кромки
				edgeLength_1 = 0;
				edgeLength_2 = 0;
				edgeLength_3 = 0;

				var detailLength = parseInt(detail[i][1]);
				var detailWidth = parseInt(detail[i][2]);
				var detailCount = parseInt(detail[i][3]);
				var edgeArr = detail[i][4];

				if(edgeArr[0] != 0) {
					if(edgeArr[0] == '0.4 мм') { edgeLength_1 = edgeLength_1 + detailLength; }
					if(edgeArr[0] == '1.0 мм') { edgeLength_2 = edgeLength_2 + detailLength; }
					if(edgeArr[0] == '2.0 мм') { edgeLength_3 = edgeLength_3 + detailLength; }
				} if(edgeArr[1] != 0) {
					if(edgeArr[1] == '0.4 мм') { edgeLength_1 = edgeLength_1 + detailWidth; }
					if(edgeArr[1] == '1.0 мм') { edgeLength_2 = edgeLength_2 + detailWidth; }
					if(edgeArr[1] == '2.0 мм') { edgeLength_3 = edgeLength_3 + detailWidth; }
				} if(edgeArr[2] != 0) {
					if(edgeArr[2] == '0.4 мм') { edgeLength_1 = edgeLength_1 + detailLength; }
					if(edgeArr[2] == '1.0 мм') { edgeLength_2 = edgeLength_2 + detailLength; }
					if(edgeArr[2] == '2.0 мм') { edgeLength_3 = edgeLength_3 + detailLength; }
				} if(edgeArr[3] != 0) {
					if(edgeArr[3] == '0.4 мм') { edgeLength_1 = edgeLength_1 + detailWidth; }
					if(edgeArr[3] == '1.0 мм') { edgeLength_2 = edgeLength_2 + detailWidth; }
					if(edgeArr[3] == '2.0 мм') { edgeLength_3 = edgeLength_3 + detailWidth; }
				}
				edgeLength_1 = edgeLength_1 * detailCount;
				edgeLength_2 = edgeLength_2 * detailCount;
				edgeLength_3 = edgeLength_3 * detailCount;
			}

			// Количество деталей
			if (this.isAN(totalCount)) {
				this.currentState.totalDetailCount = totalCount;
			} else {
				this.currentState.totalDetailCount = '-';
			}


			// Площадь и периметр
			var min_totalDetailPerimeter = (this.currentState.cuttingSize[0] * 2) + (this.currentState.cuttingSize[1] * 2);

			if(totalDetailPerimeter <= min_totalDetailPerimeter) {
				totalDetailPerimeter = min_totalDetailPerimeter;
			}

			if (this.isAN(totalDetailSquare)) { this.currentState.totalDetailSquare = totalDetailSquare; }
			else { this.currentState.totalDetailSquare = '-'; }

			if (this.isAN(totalDetailPerimeter)) { this.currentState.totalDetailPerimeter = totalDetailPerimeter / 1000; }
			else { this.currentState.totalDetailPerimeter = '-'; }



			// Длина кромки
			if (this.isAN(edgeLength_1)) { this.currentState.edgeLength_1 = edgeLength_1 / 1000; }
			else { this.currentState.edgeLength_1 = '-'; }

			if (this.isAN(edgeLength_2)) { this.currentState.edgeLength_2 = edgeLength_2 / 1000; }
			else { this.currentState.edgeLength_2 = '-'; }

			if (this.isAN(edgeLength_3)) { this.currentState.edgeLength_3 = edgeLength_3 / 1000; }
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

			this.getDetailInfo();
			setTimeout(this.getDetailOnPlate, 10);
			this.localStorageSaving();
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





























		removeGroup: function(index) {

			this.detailItem.splice(index, 1);
			this.textFieldUpdate();
			this.getDetailsItemArray();

			this.localStorageSaving();

		},



		localStorageSaving: function() {
			var datailsArr = this.detailItem;
			localStorage.setItem ("details", JSON.stringify(datailsArr));
		},

		localStorageRestore: function() {
			var datailsArr = JSON.parse(localStorage.details);
			// console.log(datailsArr)
	    this.detailItem = datailsArr;
			setTimeout(this.textFieldUpdate, 10);
		},
























		getDetailsItemArray: function() {
			var details = this.detailItem;
			var arrRender = [];
			var arr = this.currentState.arrPlates;

			var cuttingLength = parseInt(this.currentState.cuttingSize[0]);
			var cuttingWidth = parseInt(this.currentState.cuttingSize[1]);

			var plateWidth = this.currentState.plateWidth;
			var plateHeight = this.currentState.plateHeight;

			for (var i = 0; i < details.length; i++) {
				var count = details[i][3];

				for (var j = 0; j < count; j++) {

					var lengthMod = details[i][1] * plateWidth / cuttingLength * 0.9984984984984985;
					var widthMod = details[i][2] * plateHeight / cuttingWidth * 0.9984984984984985;

					var itemArr = ['detail_' + i + '_' + j, details[i][1], details[i][2], i, j, details[i][4], [lengthMod,widthMod], 1]
					arrRender.push(itemArr);
				}
			}


			this.detailItemRender = arrRender;

			setTimeout(this.getDetailOnPlate, 100);
		},





		getDetailOnPlate: function(flag) {
			var self = this;
			var cuttingSize = this.currentState.cuttingSize;
			var margin = 0;
			var details = this.detailItemRender;
			var plateWidth = this.currentState.plateWidth;
			var plateHeight = this.currentState.plateHeight;

			// console.log(123)

			for (var i = 0; i < details.length; i++) {
				var el = $('#detail_' + details[i][3] + '_' + details[i][4]);

				el.removeClass('bd-top');
				el.removeClass('bd-right');
				el.removeClass('bd-bottom');
				el.removeClass('bd-left');


				if (details[i][5][0] != '0') { el.addClass('bd-top'); }
				if (details[i][5][1] != '0') { el.addClass('bd-right'); }
				if (details[i][5][2] != '0') { el.addClass('bd-bottom'); }
				if (details[i][5][3] != '0') { el.addClass('bd-left'); }

				var plate = details[i][7];

				var bottom = el.position().top + details[i][6][0];

				if (bottom > plateHeight * plate) {
					plate = plate + 1;

					this.currentState.cuttingPlates = plate;

				}

				this.detailItemRender[i].splice(7,1,plate);


			}

			setTimeout(function() {
				self.masonry();
			}, 10)
			setTimeout(function() {
				self.checkPlateFit(flag);
			}, 20)

		},














		checkPlateFit: function(flag) {
			var details = this.detailItemRender;
			var self = this;
			var plateHeight = this.currentState.plateHeight;

			if(typeof flag == 'undefined') {
				flag = false;
			}

			for (var i = 0; i < details.length; i++) {
				var plate = details[i][7];
				var el = $('#'+details[i][0]);

				el.removeClass('bd-top');
				el.removeClass('bd-right');
				el.removeClass('bd-bottom');
				el.removeClass('bd-left');


				if (details[i][5][0] != '0') { el.addClass('bd-top'); }
				if (details[i][5][1] != '0') { el.addClass('bd-right'); }
				if (details[i][5][2] != '0') { el.addClass('bd-bottom'); }
				if (details[i][5][3] != '0') { el.addClass('bd-left'); }


				var bottom = el.position().top + details[i][6][0];

				// console.log(bottom, plateHeight, plate)

				if (bottom > plateHeight * plate) {
					plate = plate + 1;
				}

				this.detailItemRender[i].splice(7,1,plate);

				this.currentState.cuttingPlates = plate;

			}
			if(!flag) {
				this.getDetailOnPlate(true);
			}

			setTimeout(function() {
				self.masonry();
			}, 20)

		},




		masonry: function() {
			var self = this;

			for (var i = 1; i < this.currentState.cuttingPlates + 1; i++) {
				var elem = document.querySelector('.grid_' + i);

				var childs = $('.grid_' + i)[0].children.length;

				if (childs > 0) {

					var msnry = new Masonry( elem, {
						itemSelector: '.grid-item',
						columnWidth: 2,
						gutter: 0,
					})
				}
			}
		},













		// Функция вращения
		getDetailRotate: function(group, item) {
			var i = this.detailItem.length;
			var detailItem = this.detailItem[group];
			var detailNew = this.detailItem[group];

			var countGroup = this.detailItem[group][3] - 1;
			this.detailItem[group][3] = countGroup;

			var edgeArrRotate = this.borderRotate(detailItem[4]);

			var detailNew = ['detail_'+item+'',detailItem[2],detailItem[1],1,edgeArrRotate,this.currentState.cuttingPlates];

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

			// this.getDetailsItemArray();

			setTimeout(this.getDetailsItemArray, 100);
			setTimeout(this.textFieldUpdate, 100);

			this.localStorageSaving();
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

			// собираем информацию о деталях на раскрое
			this.getDetailInfo();

			this.detailCounterRefresh();

			this.getDetailsItemArray();
		},














		generatePDF: function() {
			var self = this;
			self.pdfScanFlag = true;
			toastr.success('Создание pdf файла с вашим заказом');
			// Get the element.
			var element = document.getElementById('calculatorBox');

			setTimeout(function() {
				// Generate the PDF.
				html2pdf().from(element).set({
					margin: 50,
					pagebreak: { before: '.beforeClass', after: ['#after1', '#after2'], avoid: 'div' },
					filename: 'Заказ на распил.pdf',
					html2canvas: { scale: 1 },
					jsPDF: {orientation: 'portrait', unit: 'px', format: [ 1470,  2797], compressPDF: true}
				}).save();
			}, 300);

			setTimeout(function() {
				self.pdfScanFlag = false;
			}, 5000);

		},





		showPopup: function() {
			this.popupVisible = true;
		},
		hidePoup: function() {
			this.popupVisible = false;
		},


		mailGenerate: function() {

			var self = this;

			self.popupVisible = false;
			self.pdfScanFlag = true;
			toastr.success('Ваша заявка отправляется');

			var formData = new FormData();



			$('body').on('submit','form',function(e){
				e.preventDefault();

				// Get the element.
				var element = document.getElementById('calculatorBox');
				var pdf_data = null;

				setTimeout(function() {
					// Generate the PDF.
					html2pdf().from(element).set({
						margin: 50,
						pagebreak: { before: '.beforeClass', after: ['#after1', '#after2'], avoid: 'div' },
						filename: 'test.pdf',
						html2canvas: { scale: 1 },
						jsPDF: {orientation: 'portrait', unit: 'px', format: [ 1470,  2797], compressPDF: true}
					}).output('datauristring').then(function( pdfAsString ) {
						pdf_data = {
							'fileDataURI': pdfAsString,
						};
					});
				}, 300);



				$('.js-calc-input').each(function(){
					var name = $(this).attr('name');
					var value = $(this).attr('value');
					formData.append(name, value);
				});

				setTimeout(function() {

					formData.append('pdf_file', pdf_data.fileDataURI);

					return formData;

				}, 3000);

			});

			setTimeout(function() {

				self.sentData(formData);

			}, 4000);

			setTimeout(function() {
				self.pdfScanFlag = false;
			}, 5000);


		},

		sentData: function(formData) {
			var m_method = 'POST';
			var m_action = '/wp-content/themes/karat/frontend/sendmail.php';

			$.ajax({
				type: m_method,
				url: m_action,
				data: formData,
				dataType: 'json',
				contentType: false,
				processData: false,
			})
			.done(function() {
				toastr.success('Ваше письмо успешно отправлено!');
			})
			.fail(function() {
				toastr.error('Письмо не отправлено!');
			});
		},








	},
	watch:{
		'currentState.nextPlateItem'(){
			this.getDetailsItemArray();
		},
		'plates'(){
			this.platesChange();
		}
	},
	mounted() {
		this.getSourseDetails();
		// this.textFieldUpdate();
		// this.getDetailsItemArray();
		this.localStorageRestore();
	},

});

</script>

</div>


</div>

<footer class="page-footer">

	<div class="container">
		<div class="footer_menu_block">
			<div class="footer_menu_block_item">
				<p class="title">КАТАЛОГ</p>
				<ul class="footer_menu_block_list">
					<li><a href="#">Декоры мебельные</a></li>
					<li><a href="#">Кромочные материалы</a></li>
					<li><a href="#">Мойки и смесители</a></li>
					<li><a href="#">Мебельная фурнитура</a></li>
					<li><a href="#">Плитные материалы</a></li>
					<li><a href="#">Шкафы-купе</a></li>
					<li><a href="#">Фасады</a></li>
				</ul>
			</div>
			<div class="footer_menu_block_item">
				<p class="title">УСЛУГИ</p>
				<ul class="footer_menu_block_list">
					<li><a href="#">Распил и кромление</a></li>
					<li><a href="#">Присадка</a></li>
					<li><a href="#">Фрезеровка</a></li>
					<li><a href="#">Мебельное производство</a></li>
					<li><a href="#">Производство фасадов</a></li>
				</ul>
			</div>
			<div class="footer_menu_block_item">
				<p class="title">УСЛОВИЯ</p>
				<ul class="footer_menu_block_list">
					<li><a href="payment_delivery.php">Доставка</a></li>
					<li><a href="payment_delivery.php">Оплата</a></li>
					<li><a href="payment_delivery.php">Гарантия</a></li>
					<li><a href="payment_delivery.php">Помощь</a></li>
				</ul>
			</div>
			<div class="footer_menu_block_item">
				<p class="title">ФИЛИАЛЫ</p>
				<ul class="footer_menu_block_list">
					<li><a href="#">Армавир</a></li>
					<li><a href="#">Симферополь</a></li>
					<li><a href="#">Сочи</a></li>
				</ul>
			</div>
		</div>


		<div class="footer_bottom_block">
			<div class="logo_wrapper"><img src="/wp-content/themes/karat/static/imgs/main_logo_orange.svg" alt=""></div>

			<div class="phonebox">
				<a href="tel:+78612050519" class="phone_header">8(861)205-05-19</a>
				<a href="tel:+78612050592" class="phone_header">8(861)205-05-92</a>
			</div>
		</div>

	</div>

</footer>
<?php //include ($_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/karat/frontend/_include/footer.php');?>

</body>
</html>
