<script lang="ts">
import { defineComponent } from 'vue'
import {
  iQueueItem,
  iServerResponse
} from 'src/components/global/notificationsQueue/notificationsQueue.types'

export default defineComponent({
  name: 'notificationsQueue.vue',
  data: function () {
    return {
      parameters: {
        duration: 1000 as number,
      },
      queue: [] as iQueueItem[]
    }
  },
  mounted() {
    document.addEventListener('serverResponse', this.handleServerResponse, { passive: true, })
  },
  methods: {
    handleServerResponse(event: iServerResponse) {
      const button = event.target as HTMLElement
      button.classList.remove('_loading')
      button.classList.remove('_disabled')
      const productId = event.detail.product.id

      if (event.detail.status === 'success') {
        if (event.detail.action.type === 'add') {
          button.classList.add('active')
        } else {
          button.classList.remove('active')
        }

        this.queue.push({
          ...event.detail.product,
          isShown: false
        })
        const item = this.getQueueItemById(productId)
        setTimeout(() => item.isShown = true, 25)
        setTimeout(() => this.removeQueueItemById(productId), 5000)
      }
    },
    getQueueItemById(id: string | number): iQueueItem | undefined {
      return this.queue.find((item: iQueueItem) => item.id === id)
    },
    removeQueueItemById(id: string | number): void {
      const item = this.getQueueItemById(id)
      if (item) {
        item.isShown = false
        setTimeout(() => {
          this.queue = this.queue.filter((item: iQueueItem) => item.id !== id)
        }, 333)
      }
    },
    clearAll(event: MouseEvent): void {
      const target = event.target as HTMLElement
      const button: HTMLElement = target.closest('.nq-button')
      this.queue.forEach((item: iQueueItem) => item.isShown = false)
      button.classList.remove('_active')
      setTimeout(() => this.queue = [], 500)
    }
  }
})
</script>

<template>
  <div class="nq">
    <button :class="queue.length > 0 ? '_active' : '' "
            :style="`transition-delay: 0.${queue.length}s`"
            aria-label="Скрыть все уведомления" class="nq-button"
            title="Скрыть все уведомления" @click="clearAll">
      <span>скрыть все</span>
    </button>
    <article v-for="(item, index) in queue" :key="item.id" :class="item.isShown ? '_active': '' "
             class="nq-item">
      <div class="nq-item-label">какой-то текст</div>
      <a :aria-label="item.title" :href="item.url" :title="item.title">
        <img :alt="item.title" :src="item.img.url" class="nq-item-img" loading="lazy">
      </a>
      <div class="nq-item-body">
        <h3 class="nq-item-title">
          <a :aria-label="item.title" :href="item.url" :title="item.title">
            {{ item.title }}
          </a>
        </h3>
        <div class="nq-item-size">{{ item.size }}</div>
        <div :class="item.colorClass" class="nq-item-color"></div>
      </div>
      <button aria-label="Скрыть уведомление" class="nq-item-close" title="Скрыть уведомление"
              type="button" @click="removeQueueItemById(item.id)">
        <span class="iconfont icon-close"></span>
      </button>
    </article>
  </div>
</template>

<style lang="scss" scoped>
@use 'src/styles/shared' as *;

.nq {
  $size: 13px;
  $sizeImg: 64px;
  $offsetX: 400px;
  $transitionDuration: 333ms;

  position: fixed;
  z-index: 100;
  top: calc(var(--headerHeight) + 14px);
  right: calc(var(--scrollbarWidth) + 14px);
  font-size: $size;
  line-height: 1.1;
  color: black;
  width: fit-content;
  @include mediaTabletM {
    top: calc(var(--headerHeight) + 40px);
    right: calc(var(--scrollbarWidth) + 40px);
  }

  &-item {
    position: relative;
    z-index: 0;
    padding: ($size * 0.5) $size;
    background: white;
    border: 1px solid $colorGreyMild;
    border-radius: ($size * 0.5);
    box-shadow: ($size * 0.5) ($size * 0.5) $size 0 $colorGreyMild;
    margin-top: $size;
    display: flex;
    flex-wrap: wrap;
    column-gap: $size;
    row-gap: ($size * 0.5);
    // transition: opacity $transitionDuration, transform $transitionDuration;
    transition: $transitionDuration;
    pointer-events: none;
    transform: translate($offsetX, 0);
    opacity: 0;
    width: 280px;
    @include mediaTabletM {
      width: 320px;
    }
    //position: absolute;

    &._active {
      //position: relative;
      transform: none;
      opacity: 1;
      pointer-events: auto;
    }

    &-label {
      width: 100%;
      flex: 0 0 auto;
      color: black;
    }

    &-img {
      width: $sizeImg;
      height: $sizeImg;
      flex: 0 0 auto;
      object-fit: cover;
      object-position: center;
    }

    &-body {
      @include flex($w: wrap);
      column-gap: $size * 0.5;
      row-gap: $size * 0.5;
      flex: 0 0 auto;
      width: calc(100% - $sizeImg - $size);
    }

    &-title {
      @include lineClamp(3);
      font-weight: 500;
      width: 100%;
      @include mediaTabletM {
        @include lineClamp(2);
      }
    }

    &-size {
      display: flex;
      align-items: center;
      justify-content: center;
      flex: 0 0 auto;
      background: $colorGreyMild;
      width: $size * 4;
      height: $size * 2;
      border-radius: 6px;
    }

    &-color {
      flex: 0 0 auto;
      width: $size * 2;
      height: $size * 2;
      border-radius: 50%;
    }

    &-close {
      position: absolute;
      z-index: 1;
      top: $size * 0.5;
      right: $size * 0.5;
      color: black;
      font-size: $size;
    }
  }

  &-button {
    background: white;
    border-radius: 6px;
    margin: 0 auto;
    font-size: 14px;
    width: fit-content;
    text-align: center;
    letter-spacing: 0.02em;
    padding: ($size * 0.5) $size;
    border: 1px solid $colorGreyMild;
    box-shadow: ($size * 0.5) ($size * 0.5) $size 0 $colorGreyMild;
    opacity: 0;
    pointer-events: none;
    transform: translate($offsetX, 0);
    transition: $transitionDuration;

    &._active {
      opacity: 1;
      pointer-events: auto;
      transform: none;
    }
  }
}
</style>
