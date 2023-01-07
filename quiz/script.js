/*quiz data */
const quizData = [
  {
    question: 'Pilih gejala yang Anda rasakan saat ini.',
    a: 'Sakit Kepala',
    b: 'Pilek',
    c: 'Bersin',
    d: 'Sakit Tenggorokan',
    e: 'Batuk Terus Menerus (Tidak Berdahak)',
    f: 'Demam',
    g: 'Kehilangan indera perasa',
    h: 'Indera penciuman hilang',
    i: 'Sesak napas',
    j: 'Sulit berpikir jenih',
    k: 'Pusing',
    l: 'Malaise',
    m: 'Mual',
    n: 'Kelelahan dan nyeri otot',
    correct: 'a',
  },
];

  /*Grabing all the elements */
const question = document.getElementById('question');
const a = document.getElementById('a+');
const b = document.getElementById('b+');
const c = document.getElementById('c+');
const d = document.getElementById('d+');
const e = document.getElementById('e+');
const f = document.getElementById('f+');
const g = document.getElementById('g+');
const h = document.getElementById('h+');
const i = document.getElementById('i+');
const j = document.getElementById('j+');
const k = document.getElementById('k+');
const l = document.getElementById('l+');
const m = document.getElementById('m+');
const n = document.getElementById('n+');
const btn = document.getElementById('submit');
const all_answer = document.querySelectorAll('.answer');

let index = 0;
let score = 0;
//get the getSelected answer
function getSelected() {
  let ans = undefined;
  all_answer.forEach((el) => {
    if (el.checked) {
      ans = el.id;
    }
  });
  return ans;
}
//disselect all answer
function deselectans() {
  all_answer.forEach((el) => {
    el.checked = false;
  });
}
//load the quiz data
function getquiz() {
  deselectans();
  question.innerText = quizData[index].question;
  a.innerText = quizData[index].a;
  b.innerText = quizData[index].b;
  c.innerText = quizData[index].c;
  d.innerText = quizData[index].d;
  e.innerText = quizData[index].e;
  f.innerText = quizData[index].f;
  g.innerText = quizData[index].g;
  h.innerText = quizData[index].h;
  i.innerText = quizData[index].i;
  j.innerText = quizData[index].j;
  k.innerText = quizData[index].k;
  l.innerText = quizData[index].l;
  m.innerText = quizData[index].m;
  n.innerText = quizData[index].n;
}
//move forward the quiz
function startquiz() {
  btn.addEventListener('click', () => {
    let ans = getSelected();
    if (ans) {
      if (ans == quizData[index].correct) {
        score++;
      }
    }
    index++;
    if (index < quizData.length) {
      getquiz();
    } else {
      alert('score :' + score);
      location.reload();
    }
  });
}
getquiz();
startquiz();