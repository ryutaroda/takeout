<template>
  <main class="l-main l-main__bg">
    <!-- search -->
    <section class="p-search u-wrap">
      <p class="p-search__text">テイクアウトできるお店を探そう！！</p>
      <form method="GET" action>
        <div class="p-search__content">
          <select class="p-search__select" v-model="category">
            <option value>ジャンル</option>
            <option v-for="category in categories" :value="category.name">{{ category.name }}</option>
          </select>
          <select class="p-search__select" v-model="prefecture">
            <option value>都道府県</option>
            <option v-for="prefecture in prefectures" :value="prefecture.name">{{ prefecture.name }}</option>
          </select>
        </div>
      </form>
    </section>
    <!-- shopList -->
    <section class="p-shopList u-wrap">
      <!-- shop -->
      <!-- @foreach ($users as $user) -->
      <div v-for="user in searchShops" class="p-shop">
        <div class="p-shop__img">
          <a :href="'/takeout/detail/' + user.id">
            <img :src="`/storage/${user.pic}`" alt />
          </a>
        </div>
        <div class="p-shop__info">
          <h3 class="p-shop__name">
            <a :href="'/takeout/detail/' + user.id">{{ user.name }}</a>
          </h3>
          <span class="p-shop__category">{{ user.category }}/ {{ user.address }}</span>
          <div class="p-shop__time-container">
            <p class="p-shop__time-text">■テイクアウト営業時間</p>
            <span class="p-shop__time-num">{{ user.open_hours }}</span>
          </div>
        </div>
      </div>
      <!-- @endforeach -->
    </section>
  </main>
</template>

<script>
export default {
  data() {
    return {
      users: [],
      categories: [
        { id: 1, name: "餃子" },
        { id: 2, name: "ハンバーガー" },
        { id: 3, name: "ピザ" },
        { id: 4, name: "丼もの" },
        { id: 5, name: "弁当" },
        { id: 6, name: "焼き鳥" },
        { id: 7, name: "洋食" },
        { id: 8, name: "寿司" },
        { id: 9, name: "とんかつ" },
        { id: 10, name: "和食" },
        { id: 11, name: "お好み焼き" },
        { id: 12, name: "カフェ" },
        { id: 13, name: "スイーツ" },
        { id: 14, name: "カレー" }
      ],
      category: "",
      prefectures: [
        { id: 1, name: "北海道" },
        { id: 2, name: "青森県" },
        { id: 3, name: "岩手県" },
        { id: 4, name: "宮城県" },
        { id: 5, name: "秋田県" },
        { id: 6, name: "山形県" },
        { id: 7, name: "福島県" },
        { id: 8, name: "茨城県" },
        { id: 9, name: "栃木県" },
        { id: 10, name: "群馬県" },
        { id: 11, name: "埼玉県" },
        { id: 12, name: "千葉県" },
        { id: 13, name: "東京都" },
        { id: 14, name: "神奈川県" },
        { id: 15, name: "新潟県" },
        { id: 16, name: "富山県" },
        { id: 17, name: "石川県" },
        { id: 18, name: "福井県" },
        { id: 19, name: "山梨県" },
        { id: 20, name: "長野県" },
        { id: 21, name: "岐阜県" },
        { id: 22, name: "静岡県" },
        { id: 23, name: "愛知県" },
        { id: 24, name: "三重県" },
        { id: 25, name: "滋賀県" },
        { id: 26, name: "京都府" },
        { id: 27, name: "大阪府" },
        { id: 28, name: "兵庫県" },
        { id: 29, name: "奈良県" },
        { id: 30, name: "和歌山県" },
        { id: 31, name: "鳥取県" },
        { id: 32, name: "島根県" },
        { id: 33, name: "岡山県" },
        { id: 34, name: "広島県" },
        { id: 35, name: "山口県" },
        { id: 36, name: "徳島県" },
        { id: 37, name: "香川県" },
        { id: 38, name: "愛媛県" },
        { id: 39, name: "高知県" },
        { id: 40, name: "福岡県" },
        { id: 41, name: "佐賀県" },
        { id: 42, name: "長崎県" },
        { id: 43, name: "熊本県" },
        { id: 44, name: "大分県" },
        { id: 45, name: "宮崎県" },
        { id: 46, name: "鹿児島県" },
        { id: 47, name: "沖縄県" }
      ],
      prefecture: ""
    };
  },
  props: {
    users: []
  },
  computed: {
    searchShops() {
      let list = this.users.slice();
      // ジャンルを選択した時
      if (this.category) {
        list = list.filter(e => {
          return e.category === this.category;
        });
      }
      // 都道府県を選択した時
      if (this.prefecture) {
        list = list.filter(e => {
          return e.address === this.prefecture;
        });
      }
      return list;
    }
  }
};
</script>