export interface Competition {
    date: string
    federation: string
    country: 'CH' | 'FR'
    epreuve: string
    parties: string
    nb: number
    s1: number
    s2: number
    s3: number
    s4: number
    s5: number
    s6: number
    s7: number
    lien: string
  }
  
  export interface FilterState {
    dateStart: string
    dateEnd: string
    season: string
    federation: string
    epreuve: string
    parties: string
    lien: string
  }
  
  