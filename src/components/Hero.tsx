import React from 'react'
import { AspectRatio } from './ui/aspect-ratio'
import slide from "../assets/slide01.jpg"
export default function Hero() {
  return (
    <div style={{ background:`url(${slide})`,backgroundPosition:"top",backgroundSize:"cover",backgroundRepeat:"no-repeat" }} 
    className='w-full z-10  bg-[#02abee]  rounded-md relative h-[85vh] justify-start pt-20 flex flex-col items-center'>
  <div className='absolute bg-[#00723e] h-24 flex flex-row mx-12 items-center w-[80%] top-[-3rem] z-[9999] '>
          <div className='mx-12'>
              <h2 className='text-2xl font-bold text-white'>La FISF</h2>
          </div>
</div>
  </div>
  )
}
