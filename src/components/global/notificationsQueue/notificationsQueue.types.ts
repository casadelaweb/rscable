interface iProductInfo {
  id: string | number,
  url: string,
  title: string,
  img: {
    url: string,
    alt?: string,
  },
  size?: string,
  colorClass?: string,
}

export interface iQueueItem extends iProductInfo {
  isShown: boolean,
}

export interface iServerResponse extends Event {
  detail: {
    status: 'success' | 'error',
    statusMessage?: string,
    action: {
      type: 'add' | 'remove',
      destination: 'cart' | 'favourite',
    },
    product: iProductInfo,
  }
}