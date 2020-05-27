<template>
  <div class="container">
    <form v-on:submit.prevent>
      <input type="text" v-model="task" />
      <p>{{ task }}</p>
      <button class="submit-btn" type="submit" @click.prevent="addTask">TODOを追加</button>
    </form>
    <ul>
      <li v-for="(todo, index) in todos" :key="todo.message">
        <span>{{ todo.text }}</span>
        <input type="text" v-model="todo.text" />
        <button @click="remove(index)">削除</button>
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
      task: "ここにかく",
      todos: [{ text: "aaaaa" }, { text: "ssssss" }]
    };
  },
  methods: {
    addTask() {
      if (this.task === "") return;
      this.todos.push({
        text: this.task
      });
      this.task = "";
    },
    remove(index) {
      this.todos.splice(index, 1);
    }
  }
};
</script>
