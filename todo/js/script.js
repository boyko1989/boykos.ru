// ---------------------------------------------------------------
// Данные

const allData = {
   tasksToDo: [
      'Купить хлебушка', 
      'Погладить бельишко', 
      'Забить гвоздик', 
      'Помыть полы', 
      'Навести порядок', 
      'Почитать книжечку', 
      'Выгулять кошку', 
      'Подвиг'
   ],
   tasksDone: ['Купить хлебушка']
}

// ---------------------------------------------------------------
// Переменные

const listToDo1 = document.getElementById('list-todo__1');
const listDone1 = document.getElementById('list-done__1');
let status;

// ---------------------------------------------------------------
// Функции

/**
 * Создаёт список из массива и ставит его на нужное место
 * 
 * @param {object} arr 
 * @param {string} list 
 */

const createListSet = (arr, list) => {
   for (let key in arr) {  

      if (key === list) { 

         arr[list].forEach(textOfListItem => {       

            const listItem = document.createElement('li');
            listItem.classList.add('list-item');

            if (list === 'tasksDone') {
               listItem.innerHTML = `<label><input type="checkbox" checked><span class="strikethrough" data-status="done">${textOfListItem}</span></label>`;
               listDone1.append(listItem);
            } else {
               listItem.innerHTML = `<label><input type="checkbox"><span data-status="todo">${textOfListItem}</span></label>`;
               listToDo1.append(listItem);
            }
         }); 
      } 
   }
}
// ---------------------

/**
 * Формирует поля объекта по имеющейся вёрстке
 * 
 * @param {object} nodeList 
 * @param {string} sts
 * @param {object} arr 
 */
const adjustFields = (nodeList, sts, arr) => {

   let field2Rem;
   if (sts === 'done') {
      field2Rem = 'tasksDone';
   } else if (sts === 'todo') {
      field2Rem = 'tasksToDo';
   }

   for (let field in arr) {
      if (field === field2Rem) {
         delete arr[field2Rem];

         arr[field2Rem] = [];

         for (let i = 0; i < nodeList.length; i++) {
            const span = nodeList[i];
            arr[field2Rem].push(span.innerHTML);
         }
      }
   }
}
// ---------------------

/**
 * Меняет принадлежность задачи на противоположную
 */
const changeOpposite = (evt) => {

   let tag = evt.target.tagName.toLowerCase();
   
   if (tag !== 'ul' && tag === 'span') {

      let value = evt.target.getAttribute('data-status');

      if (value === 'todo') {
         evt.target.setAttribute('data-status', 'done'); 
         evt.target.classList.add('strikethrough');
      } else {
         evt.target.setAttribute('data-status', 'todo');
         evt.target.classList.remove('strikethrough');
      }
   }
}
// ---------------------

// ---------------------------------------------------------------
// Логика

   // По клику меняем "сторону" элемента

listToDo1.addEventListener('click', changeOpposite);
listDone1.addEventListener('click', changeOpposite);

// Формируем отображение списков

const keyToDo = 'tasksToDo';
createListSet(allData, keyToDo);

const keyDone = 'tasksDone';
createListSet(allData, keyDone);

// Мониторим списки

const thisDone = document.querySelectorAll('span[data-status=done]');
status = 'done';
adjustFields(thisDone, status, allData);

// const thisToDo = document.querySelectorAll('span[data-status=todo]');
// status = 'todo';
// adjustFields(thisToDo, status, allData);

console.log(allData);
