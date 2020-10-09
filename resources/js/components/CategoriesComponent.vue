<template>
	<div>
    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a :class="['nav-item nav-link', { 'active': k === 0 }]" data-toggle="tab" :href="'#'+child.slug" role="tab" v-for="(child, k) in children">{{ child.title }}</a>
      </div>
    </nav>
    <div class="tab-content">
      <div :class="['tab-pane fade show', { 'active': k === 0 }]" :id="child.slug" role="tabpanel" v-for="(child, k) in children">
        <post-component :child="child" :pSlug="slug" />
      </div>
    </div>
  </div>
</template>

<script>
export default {

  props: ['slug'],

  data () {
    return {
      children: {}
    }
  },

  mounted() {
    axios.get(route('api.categories.index', this.slug)).then(({data}) => {
      this.children = data.children;
    });
  }
}
</script>

<style lang="css" scoped>
</style>