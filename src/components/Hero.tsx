import React from 'react'
import { AspectRatio } from './ui/aspect-ratio'
import slide from "../assets/slide01.jpg"
export default function Hero() {
  return (
    <div style={{ background:`url(${slide})`,backgroundPosition:"top",backgroundSize:"cover",backgroundRepeat:"no-repeat" }} 
    className='w-full bg-[#02abee]  rounded-md relative h-[85vh] justify-start pt-20 flex flex-col items-center'>
         
    </div>
  )
}
