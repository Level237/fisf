import React from 'react'
import { Separator } from './ui/separator'

export default function CalenderList() {

    const calenderList=[
        {
            id:1,
            date:"14/02/2024",
            title:"Simultané mondial de Blitz",
            link:"/"
        },
        {
            id:2,
            date:"11/01/2025",
            title:"Simultané mondial",
            link:"/"
        },
        {
            id:3,
            date:"15/02/2025",
            title:"Panafricains n°3",
            link:"/"
        },
        {
            id:4,
            date:"22-23/02/2025",
            title:"Couple de Gréoux & 2e étape du Grand Chelem international",
            link:"/"
        }
    ]
  return (
    <div className='bg-gray-300 max-sm:w-full  absolute max-sm:block bottom-[-3rem] max-sm:px-3     px-16 py-6 flex flex-col'>
              {calenderList.map((calender)=>(
                <>
                <div key={calender.id} className='flex flex-row max-sm:gap-2  items-start justify-between'>
                <div className='w-64 max-sm:flex-1'>
                          <h2 className='text-3xl max-sm:text-sm'>{calender.date}</h2>
                </div>
                <div className='w-[30rem] max-sm:flex-1'>

                    
                    <h2 className={`font-bold max-sm:text-sm ${calender.id===4 ? "text-xl  max-sm:text-sm max-sm:w-44  w-[28rem]" : "text-3xl  max-sm:text-sm "}`}>{calender.title}</h2>
                </div>
                <div className='w-20'>
                    <button className='text-red-500 text-sm'>Consulter</button>
                </div>
                
          </div>
          {calender.id<4 && <Separator className='w-full mt-4 mb-4 bg-current'/>}
                </>
              ))}
      </div>
  )
}
