<template>
  <div class="container">
    <form v-on:submit.prevent>
      <input type="text" v-model="task" placeholder="ここに書く" />
      <!-- <p>{{ task }}</p> -->
      <button class="submit-btn" type="submit" @click.prevent="addTask">@{{changeButtonText}}</button>
    </form>
    <ul>
      <li v-for="(todo, index) in todos" v-bind:key="todo.id" :class>
        <!-- <div>{{ todo.id }}</div> -->
        <span>{{ todo.text }}</span>
        <!-- <input @keyup.enter="editDone(index)" type="text" v-model="todo.text" /> -->
        <!-- <span v-show="show">{{ todo.text }}</span>
        <input v-show="!show" type="text" v-model="todo.text" />-->
        <button @click="edit(index)">編集</button>
        <button @click="remove(index)">削除</button>
        <!-- <button @click="show=!show">切り替え</button> -->
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
  data() {
    return {
      task: "",
      todos: [
        { id: 1, text: "aaaaa" },
        { id: 2, text: "ssssss" }
      ],
      //   editedTodo: null,
      show: true,
      editIndex: -1
    };
  },
  computed: {
    changeButtonText() {
      return this.editIndex === -1 ? "追加" : "編集";
    }
  },
  methods: {
    // タスク追加
    addTask() {
      if (this.task === "") return;
      this.todos.push({
        // id: this.id,
        text: this.task
      });
      this.task = "";
    },
    // 削除
    remove(index) {
      this.todos.splice(index, 1);
    },
    edit(index) {
      this.task = this.todos(index);
    }
    // 編集モードに切り替え
    // editTodo(index){ },
    // editDone(indedx){}
  }
};
</script>
