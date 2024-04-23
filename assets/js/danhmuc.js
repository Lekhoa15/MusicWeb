const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const PLAYER_STORAGE= 'MUSIC_PLAYER_STORAGE';

const player = $('.player')
const heading = $('header h2')
const cdThumb = $('.cd-thumb')
const audio = $('#audio')
const cd = $('.cd')
const plaBtn = $('.btn-toggle-play') 
const progress = $('#progress')
const nextBtn = $('.btn-next')
const prevBtn = $('.btn-prev')
const randomBtn = $('.btn-random')
const repeatBtn = $('.btn-repeat')
const playlist = $('.playlist')
const app = {
  currentIndex :0,
  isPlaying : false,
  isRandom : false,
  isRepeat : false,
  config : JSON.parse(localStorage.getItem(PLAYER_STORAGE)) ||{},

    songs: [

        {
            name : 'BigCity-Boy',
            singer : 'Binz',
            path :  './assets/music/song1.mp3',
            image : './assets/image/song1.jpg'
        },
        {
            name : 'Chúng ta của tương lai',
            singer : 'Sơn Tùng MTP',
            path :  './assets/music/song2.mp3',
            image : './assets/image/song2.jpg'
        },
        {
            
            name : 'Ngày đầu tiên',
            singer : 'Đức Phúc',
            path :  './assets/music/song3.mp3',
            image : './assets/image/song3.jpg'
        },
        {
            name : 'Nâng chén tiêu sầu',
            singer : 'Bích Phương',
            path :  './assets/music/song4.mp3',
            image : './assets/image/song4.jpg'
        },
        {
            name : 'Thằng điên',
            singer : 'Jujstati',
            path :  './assets/music/song5.mp3',
            image : './assets/image/song5.jpg'
        },
        {
            name : 'Chạy khỏi thế giới này',
            singer : 'DaLaB x Phương Ly',
            path :  './assets/music/song6.mp3',
            image : './assets/image/song6.jpg'
        },
        {
            
            name : 'Ngày đầu tiên',
            singer : 'Đức Phúc',
            path :  './assets/music/song3.mp3',
            image : './assets/image/song3.jpg'
        },
        {
            name : 'Nâng chén tiêu sầu',
            singer : 'Bích Phương',
            path :  './assets/music/song4.mp3',
            image : './assets/image/song4.jpg'
        },
        {
            name : 'Thằng điên',
            singer : 'Jujstati',
            path :  './assets/music/song5.mp3',
            image : './assets/image/song5.jpg'
        },
        {
            name : 'Chạy khỏi thế giới này',
            singer : 'DaLaB x Phương Ly',
            path :  './assets/music/song6.mp3',
            image : './assets/image/song6.jpg'
        },

    
    
    ],
    setConfig: function(key, value) {
        this.config[key] = value;
        localStorage.setItem(PLAYER_STORAGE, JSON.stringify(this.config))
    },
    render : function(){
    const htmls = this.songs.map((song, index) =>{
    return  `
        <div class="song ${index === this.currentIndex ? 'active' : ''}" data-index="${index}">
        <div class="thumb" 
        style="background-image: url('${song.image}')">
        </div>
        <div class="body">
          <h3 class="title">${song.name}</h3>
          <p class="author">${song.singer}</p>
        </div>
        <div class="option">
          <i class="fas fa-ellipsis-h"></i>
        </div>
  </div>
  
      `
    })
      playlist.innerHTML = htmls.join('')

   }, 
  
   definedProperties : function(){
      Object.defineProperty(this, 'currentSong',{
        get : function(){
          return this.songs[this.currentIndex]
        }
        
      })
     
      
   },
   handleEvents: function(){

      const _this = this;
      const cdWidth = cd.offsetWidth

      // cd quay/ dung 
    const  cdThumbAnimate =cdThumb.animate([
        { transform : 'rotate(360deg)'}

      ], {
        duration : 10000,
        iterations : Infinity
      
      })
      cdThumbAnimate.pause()


      // xu ly phong to thu nho CD
      document.onscroll = function(){
         const scrollTop = window.scrollY || document.documentElement.scrollTop
         const newCdWidth = cdWidth - scrollTop

         cd.style.width = newCdWidth > 0 ? newCdWidth  + 'px' : 0
         cd.style.opacity = newCdWidth /cdWidth

         
        
    }
    // xu ly khi click play 
    plaBtn.onclick = function(){
      if(_this.isPlaying){
        audio.pause()
      }else{
        
        audio.play()
        
      }
       
      } 
      // khi song dc play 
      audio.onplay = function(){
        _this.isPlaying = true
        player.classList.add('playing')
        cdThumbAnimate.play()
      }
      // khi song dc pause
      audio.onpause = function(){
        _this.isPlaying = false
        player.classList.remove('playing')
        cdThumbAnimate.pause()
      }
      // tien do bai hat thay doi

      audio.ontimeupdate = function(){ 
        if(audio.duration){
          const progressPercent = Math.floor(audio.currentTime / audio.duration * 100)
          progress.value = progressPercent
        }
        }
       // khi tua bai hat
       progress.onchange = function(e){
        const seekTime = audio.duration / 100 * e.target.value
         audio.currentTime = seekTime
       } 

       // khi next  bai hat 
       nextBtn.onclick = function(){
        if(_this.isRandom){
          _this.playRandomSong()
        }else{
          _this.nextSong()
        }
        audio.play()
        _this.render()
        _this.scrollToActiveSong()
       }
       // khi prev bai hat
       prevBtn.onclick = function(){
        if(_this.isRandom){
          _this.playRandomSong()
        }else{
          _this.prevSong()
        }
        audio.play()
        _this.render()
        _this.scrollToActiveSong()
       
       }
       // xu ly bat tat  ramdon song
       randomBtn.onclick = function(e){
         _this.isRandom =!_this.isRandom
         _this.setConfig('isRandom', _this.isRandom)
         randomBtn.classList.toggle('active', _this.isRandom) 

        }

        repeatBtn.onclick = function(e){
          _this.isRepeat = !_this.isRepeat
          _this.setConfig('isRepeat', _this.isRepeat)
          repeatBtn.classList.toggle('active', _this.isRepeat)
        }



      // xu ly next song khi audio ended  
      audio.onended = function(){
        if(_this.isRepeat){
          audio.play()
        } else {
          nextBtn.click()
        }
        }  
          // xu ly khi click vao playlist
        playlist.onclick = function(e){
          const songNode = e.target.closest('.song:not(.active')

          if(songNode || e.target.closest('.option')){
            // xu ly khi click vao song
            if(songNode){
              _this.currentIndex = Number(songNode.dataset.index )
              _this.loadCurrentSong()
              _this.render()
              audio.play()
            }
            if(e.target.closest('.option')){

            }
          }
        }
    },
    scrollToActiveSong : function(){
      setTimeout(()=>{
        $('.song.active').scrollIntoView({
          behavior : 'smooth',
          block : 'nearest',
        })
      }, 300)
    },
   loadCurrentSong : function(){

      heading.textContent = this.currentSong.name
      cdThumb.style.backgroundImage = `url('${this.currentSong.image}')`
      audio.src = this.currentSong.path
  },
  loadConfig : function(){
      this.isRandom= this.config.isRandom
      this.isRepeat = this.config.isRepeat

  },

   nextSong : function(){
    this.currentIndex++
    if(this.currentIndex >= this.songs.length){
      this.currentIndex = 0
    }
    this.loadCurrentSong()

   },
   prevSong : function(){
    this.currentIndex--
    if(this.currentIndex < 0){
      this.currentIndex = this.songs.length -1
    }
    this.loadCurrentSong()

   },
   playRandomSong : function(){

    let newIndex
    do{
      newIndex = Math.floor(Math.random() * this.songs.length)
    }while(newIndex === this.currentIndex )
    this.currentIndex = newIndex
    this.loadCurrentSong()
   },


  
   start : function(){

      this.loadConfig()

      // dinh nghia cac thuoc tinh object
      this.definedProperties()

      //xu ly cac su kien events dom
      this.handleEvents()

      // tai thong tin bai hat dau tien va UI khi chay app
      this.loadCurrentSong()
      
      
      // render playlist
      this.render()



      randomBtn.classList.toggle('active', this.isRandom) 
      repeatBtn.classList.toggle('active', this.isRepeat)
   }     
  }
    app.start()