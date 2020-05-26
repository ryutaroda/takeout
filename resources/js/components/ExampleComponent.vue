<template>
  <div class="container">
    <form v-on:submit.prevent>
      <input type="text" v-model="task" />
      <p>{{ task }}</p>
      <button class="submit-btn" type="submit" @click.prevent="addTask">TODOを追加</button>
    </form>
    <ul>
      <li v-for="todo in todos" :key="todo.message">{{ todo.text }}</li>
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
      this.todos.push({
        text: this.task
      });
      this.task = "";
    }
  }
};
</script>
