<template>
  <a href="/users_list">
    <button>Перейти к списку всех пользователей</button>
  </a>
  <a href="/create_user/1" v-if="cancreatenewuser">
    <button>Создать нового пользователя</button>
  </a>
  <a href="/create_user/0">
    <button>Редактировать данные пользователя</button>
  </a>
  <div id="ngs">Народная премия NGS.RU</div>
 <div class="edit">
   <a href='/create_news' v-if="cancreate">
     <button>Создать новость</button>
   </a>
 </div>
  <div id="all_news">
    <h3>Все новости</h3>
    <hr>
    <div v-for="novelty in news">
      <a v-bind:href=novelty.item_url>
        <span>{{ novelty.name }}</span>
      </a>
      <hr>
    </div>
  </div>
  <div v-for="item in news" id="news">
    <a v-bind:href=item.item_url>
      <h2>{{ item.name }}</h2>
    </a>
    <br>
    <img v-if="item.photo" v-bind:src=item.photo>
    <br>
    <span>{{ item.text }}</span>
    <br>
    <span>Автор: {{this.users[item.author_id-1].name}}</span>
    <div class="edit">
      <a v-bind:href=item.url class="url" v-if="canupdate">
        <button>Редактировать</button>
      </a>
    </div>
  </div>
</template>

<script>
export default {
  name: "VueNews",
  props: [
      'news',
      'users',
      'canupdate',
      'cancreate',
      'currentuser'
  ],
  data() {
    return {
      canupdate: this.canupdate,
      cancreate: this.cancreate,
      cancreatenewuser: this.currentuser === 1
    }
  },
  mounted() {

  }
}
</script>

<style scoped>
#ngs {
  background-color: midnightblue;
  width: 100%;
  height: 50px;
  color: greenyellow;
  text-align: center;
  font-size: 24px;
  font-family: sans-serif;
}

#all_news {
  width: 230px;
  position: absolute;
  left: 15%;
  font-family: sans-serif;
}

#news {
  border: solid 2px;
  margin-top: 15px;
  margin-left: 30%;
  padding: 10px;
  width: 700px;
  font-size: 18px;
  font-family: sans-serif;
}

img {
  width: 700px;
  height: 400px;
}

.edit {
  width: 100%;
  display: flex;
  flex-direction: row;
  justify-content: right;
}

.url {
  display: block;
}
</style>