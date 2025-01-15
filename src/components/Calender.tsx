'use client'

import * as React from 'react'
import { CalendarIcon, ChevronDownIcon } from 'lucide-react'
import { format } from 'date-fns'
import { fr } from 'date-fns/locale'

import { Button } from '@/components/ui/button'
import { Calendar } from '@/components/ui/calendar'
import {
  Popover,
  PopoverContent,
  PopoverTrigger,
} from '@/components/ui/popover'
import {
  Select,
  SelectContent,
  SelectItem,
  SelectTrigger,
  SelectValue,
} from '@/components/ui/select'
import { Input } from '@/components/ui/input'
import {
  Table,
  TableBody,
  TableCell,
  TableHead,
  TableHeader,
  TableRow,
} from '@/components/ui/table'
import { Tabs, TabsContent, TabsList, TabsTrigger } from '@/components/ui/tabs'

import type { Competition, FilterState } from '../types/competition'
import { Pagination } from './ui/pagination'

// Sample data
const competitions: Competition[] = [
  {
    date: '2025-01-09',
    federation: '🇨🇭',
    country: 'CH',
    epreuve: 'Hivernales de Montreux - TH2 du jeudi 9',
    parties: '02',
    nb: 25,
    s1: 3,
    s2: 0,
    s3: 5,
    s4: 11,
    s5: 4,
    s6: 2,
    s7: 0,
    lien: ""
  },
  {
    date: '2025-01-08',
    federation: '🇧🇪',
    country: 'CH',
    epreuve: 'Mercredis BRA-QUA 2',
    parties: '02',
    nb: 68,
    s1: 7,
    s2: 11,
    s3: 14,
    s4: 20,
    s5: 6,
    s6: 5,
    s7: 5,
    lien: ""
  },
  {
    date: '2025-01-08',
    federation: '🇨🇭',
    country: 'CH',
    epreuve: 'Hivernales de Montreux - TH2 du Mecredi 8',
    parties: '02',
    nb: 23,
    s1: 2,
    s2: 1,
    s3: 3,
    s4: 7,
    s5: 7,
    s6: 3,
    s7: 0,
    lien: ""
  },
  {
    date: '2025-01-07',
    federation: '🇨🇭',
    country: 'CH',
    epreuve: 'Hivernales de Montreux - TH2 du mardi 7',
    parties: '02',
    nb: 22,
    s1: 2,
    s2: 1,
    s3: 5,
    s4: 8,
    s5: 5,
    s6: 1,
    s7: 0,
    lien: ""
  },
  {
    date: '2025-01-06',
    federation: '🇨🇭',
    country: 'CH',
    epreuve: 'Hivernales de Montreux - TH2 du lundi 6',
    parties: '02',
    nb: 20,
    s1: 2,
    s2: 1,
    s3: 5,
    s4: 10,
    s5: 1,
    s6: 1,
    s7: 0,
    lien: ""
  },
  {
    date: '2025-01-05',
    federation: '🇫🇷',
    country: 'CH',
    epreuve: 'Dunkerque TH3',
    parties: '03',
    nb: 117,
    s1: 9,
    s2: 10,
    s3: 17,
    s4: 39,
    s5: 28,
    s6: 11,
    s7: 3,
    lien: ""
  },
  {
    date: '2025-01-05',
    federation: '🇫🇷',
    country: 'CH',
    epreuve: 'Championnat Départemental Yvelines 2024-2025 TH2',
    parties: '02',
    nb: 92,
    s1: 2,
    s2: 5,
    s3: 9,
    s4: 31,
    s5: 34,
    s6: 9,
    s7: 4,
    lien: ""
  },
  {
    date: '2025-01-05',
    federation: '🇫🇷',
    country: 'CH',
    epreuve: '2X Le Robert Lamentin',
    parties: '03',
    nb: 119,
    s1: 4,
    s2: 6,
    s3: 16,
    s4: 30,
    s5: 50,
    s6: 11,
    s7: 2,
    lien: ""
  },

  {
    date: '2025-01-04',
    federation: '🇫🇷',
    country: 'CH',
    epreuve: 'Dunkerque TH2 joker',
    parties: '02',
    nb: 95,
    s1: 9,
    s2: 8,
    s3: 13,
    s4: 33,
    s5: 33,
    s6: 7,
    s7: 2,
    lien: ""
  },
  {
    date: '2025-01-04',
    federation: '🇨🇭',
    country: 'CH',
    epreuve: "Hivernales de Montreux – TH4 de l'Epiphanie",
    parties: '04',
    nb: 43,
    s1: 4,
    s2: 2,
    s3: 10,
    s4: 13,
    s5: 12,
    s6: 2,
    s7: 0,
    lien: ""
  },
  
  
  // Add more sample data here
]

export function CompetitionManager() {
  const [filter, setFilter] = React.useState<FilterState>({
    dateStart: '',
    dateEnd: '',
    season: '',
    federation: 'Toutes',
    epreuve: '',
    parties: '',
    lien: ''
  })
  const [currentPage, setCurrentPage] = React.useState(1)
  const [perPage, setPerPage] = React.useState(10)
  return (
    <div className="container mx-auto p-4 space-y-6">
      <Tabs defaultValue="duplicate">
        <TabsList className=" flex items-center justify-cent  mb-12">
          <TabsTrigger value="duplicate" className="text-red-500 p-3">Compétiton Duplicate</TabsTrigger>
          <TabsTrigger value="classique" className='text-red-500 p-3'>Compétiton Classique</TabsTrigger>
        </TabsList>

        <TabsContent value="duplicate" className="space-y-6">
          {/* Filter Form */}
          <div className=' bg-gray-200 rounded-lg py-12 px-8'>
          <div className="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-4  ">
            <div className="flex gap-2">
              <Popover>
                <PopoverTrigger asChild>
                  <Button variant="outline" className="w-full bg-white justify-start text-left font-normal">
                    <CalendarIcon className="mr-2 h-4 w-4" />
                    {filter.dateStart ? format(new Date(filter.dateStart), 'P', { locale: fr }) : 'Entre'}
                  </Button>
                </PopoverTrigger>
                <PopoverContent className="w-auto bg-white p-0">
                  <Calendar
                    mode="single"
                    selected={filter.dateStart ? new Date(filter.dateStart) : undefined}
                    onSelect={(date) => setFilter(prev => ({ ...prev, dateStart: date ? date.toISOString() : '' }))}
                  />
                </PopoverContent>
              </Popover>

              <Popover>
                <PopoverTrigger asChild>
                  <Button variant="outline" className="w-full bg-white justify-start text-left font-normal">
                    <CalendarIcon className="mr-2 h-4 w-4" />
                    {filter.dateEnd ? format(new Date(filter.dateEnd), 'P', { locale: fr }) : 'et'}
                  </Button>
                </PopoverTrigger>
                <PopoverContent className="w-auto p-0 bg-white">
                  <Calendar
                    mode="single"
                    selected={filter.dateEnd ? new Date(filter.dateEnd) : undefined}
                    onSelect={(date) => setFilter(prev => ({ ...prev, dateEnd: date ? date.toISOString() : '' }))}
                  />
                </PopoverContent>
              </Popover>
            </div>

            <Select value={filter.season} onValueChange={(value) => setFilter(prev => ({ ...prev, season: value }))}>
              <SelectTrigger className='bg-white'>
                <SelectValue placeholder="Saison" />
              </SelectTrigger>
              <SelectContent className='bg-white'>
                <SelectItem value="2024-2025">2024-2025</SelectItem>
                <SelectItem value="2023-2024">2023-2024</SelectItem>
              </SelectContent>
            </Select>

            <Select value={filter.federation} onValueChange={(value) => setFilter(prev => ({ ...prev, federation: value }))}>
              <SelectTrigger className='bg-white'>
                <SelectValue placeholder="Fédération" />
              </SelectTrigger>
              <SelectContent className='bg-white'>
                <SelectItem value="Toutes">Toutes</SelectItem>
                <SelectItem value="CH">Suisse</SelectItem>
                <SelectItem value="FR">France</SelectItem>
              </SelectContent>
            </Select>

            <Select value={filter.parties} onValueChange={(value) => setFilter(prev => ({ ...prev, parties: value }))}>
              <SelectTrigger className='bg-white'>
                <SelectValue placeholder="Epreuves" />
              </SelectTrigger>
              <SelectContent className='bg-white'>
                <SelectItem value="02">2 parties</SelectItem>
                <SelectItem value="03">3 parties</SelectItem>
                <SelectItem value="04">4 parties</SelectItem>
              </SelectContent>
            </Select>

            <Select value={filter.parties} onValueChange={(value) => setFilter(prev => ({ ...prev, parties: value }))}>
              <SelectTrigger className='bg-white'>
                <SelectValue placeholder="Nombre de parties" />
              </SelectTrigger>
              <SelectContent className='bg-white'>
                <SelectItem value="02">2 parties</SelectItem>
                <SelectItem value="03">3 parties</SelectItem>
                <SelectItem value="04">4 parties</SelectItem>
              </SelectContent>
            </Select>
           
            <Input
            className='bg-white'
              placeholder="Lien"
              value={filter.lien}
              onChange={(e) => setFilter(prev => ({ ...prev, lien: e.target.value }))}
            />
            
            
          </div>
          <div className='flex items-center justify-center mt-8'>
            <Button className="bg-green-600 px-12 hover:bg-green-700 text-white">
              Aller
            </Button>
            </div>
          </div>
          
          
          {/* Results Table */}
          <div className="overflow-x-auto border rounded-lg">
            <Table>
              <TableHeader className='bg-gray-400 text-white'>
                <TableRow>
                  <TableHead>Date</TableHead>
                  <TableHead>Fédération</TableHead>
                  <TableHead>Épreuve</TableHead>
                  <TableHead>Parties</TableHead>
                  <TableHead>Nb</TableHead>
                  <TableHead>S1</TableHead>
                  <TableHead>S2</TableHead>
                  <TableHead>S3</TableHead>
                  <TableHead>S4</TableHead>
                  <TableHead>S5</TableHead>
                  <TableHead>S6</TableHead>
                  <TableHead>S7</TableHead>
                  <TableHead>Lien</TableHead>
                </TableRow>
              </TableHeader>
              <TableBody>
                {competitions.map((competition, index) => (
                  <TableRow className='even:bg-gray-100' key={index}>
                    <TableCell>{format(new Date(competition.date), 'dd-MM-yyyy')}</TableCell>
                    <TableCell className="flex items-center gap-2">
                      
                      {competition.federation}
                    </TableCell>
                    <TableCell className='text-red-600 underline'>{competition.epreuve}</TableCell>
                    <TableCell>{competition.parties}</TableCell>
                    <TableCell>{competition.nb}</TableCell>
                    <TableCell>{competition.s1}</TableCell>
                    <TableCell>{competition.s2}</TableCell>
                    <TableCell>{competition.s3}</TableCell>
                    <TableCell>{competition.s4}</TableCell>
                    <TableCell>{competition.s5}</TableCell>
                    <TableCell>{competition.s6}</TableCell>
                    <TableCell>{competition.s7}</TableCell>
                    <TableCell>{competition.lien}</TableCell>
                  </TableRow>
                ))}
              </TableBody>
            </Table>
          </div>
          <div className="p">
      <Pagination
        currentPage={currentPage}
        totalPages={758}
        onPageChange={setCurrentPage}
        onPerPageChange={setPerPage}
        perPage={perPage}
      />
    </div>
        </TabsContent>

        <TabsContent value="classique">
        <div className=' bg-gray-200 rounded-lg py-12 px-8'>
          <div className="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-4  ">
            <div className="flex gap-2">
              <Popover>
                <PopoverTrigger asChild>
                  <Button variant="outline" className="w-full bg-white justify-start text-left font-normal">
                    <CalendarIcon className="mr-2 h-4 w-4" />
                    {filter.dateStart ? format(new Date(filter.dateStart), 'P', { locale: fr }) : 'Entre'}
                  </Button>
                </PopoverTrigger>
                <PopoverContent className="w-auto bg-white p-0">
                  <Calendar
                    mode="single"
                    selected={filter.dateStart ? new Date(filter.dateStart) : undefined}
                    onSelect={(date) => setFilter(prev => ({ ...prev, dateStart: date ? date.toISOString() : '' }))}
                  />
                </PopoverContent>
              </Popover>

              <Popover>
                <PopoverTrigger asChild>
                  <Button variant="outline" className="w-full bg-white justify-start text-left font-normal">
                    <CalendarIcon className="mr-2 h-4 w-4" />
                    {filter.dateEnd ? format(new Date(filter.dateEnd), 'P', { locale: fr }) : 'et'}
                  </Button>
                </PopoverTrigger>
                <PopoverContent className="w-auto p-0 bg-white">
                  <Calendar
                    mode="single"
                    selected={filter.dateEnd ? new Date(filter.dateEnd) : undefined}
                    onSelect={(date) => setFilter(prev => ({ ...prev, dateEnd: date ? date.toISOString() : '' }))}
                  />
                </PopoverContent>
              </Popover>
            </div>

            <Select value={filter.season} onValueChange={(value) => setFilter(prev => ({ ...prev, season: value }))}>
              <SelectTrigger className='bg-white'>
                <SelectValue placeholder="Saison" />
              </SelectTrigger>
              <SelectContent className='bg-white'>
                <SelectItem value="2024-2025">2024-2025</SelectItem>
                <SelectItem value="2023-2024">2023-2024</SelectItem>
              </SelectContent>
            </Select>

            <Select value={filter.federation} onValueChange={(value) => setFilter(prev => ({ ...prev, federation: value }))}>
              <SelectTrigger className='bg-white'>
                <SelectValue placeholder="Fédération" />
              </SelectTrigger>
              <SelectContent className='bg-white'>
                <SelectItem value="Toutes">Toutes</SelectItem>
                <SelectItem value="CH">Suisse</SelectItem>
                <SelectItem value="FR">France</SelectItem>
              </SelectContent>
            </Select>

            <Select value={filter.parties} onValueChange={(value) => setFilter(prev => ({ ...prev, parties: value }))}>
              <SelectTrigger className='bg-white'>
                <SelectValue placeholder="Epreuves" />
              </SelectTrigger>
              <SelectContent className='bg-white'>
                <SelectItem value="02">2 parties</SelectItem>
                <SelectItem value="03">3 parties</SelectItem>
                <SelectItem value="04">4 parties</SelectItem>
              </SelectContent>
            </Select>

            <Select value={filter.parties} onValueChange={(value) => setFilter(prev => ({ ...prev, parties: value }))}>
              <SelectTrigger className='bg-white'>
                <SelectValue placeholder="Nombre de parties" />
              </SelectTrigger>
              <SelectContent className='bg-white'>
                <SelectItem value="02">2 parties</SelectItem>
                <SelectItem value="03">3 parties</SelectItem>
                <SelectItem value="04">4 parties</SelectItem>
              </SelectContent>
            </Select>
           
            <Input
            className='bg-white'
              placeholder="Lien"
              value={filter.lien}
              onChange={(e) => setFilter(prev => ({ ...prev, lien: e.target.value }))}
            />
            
            
          </div>
          <div className='flex items-center justify-center mt-8'>
            <Button className="bg-green-600 px-12 hover:bg-green-700 text-white">
              Aller
            </Button>
            </div>
          </div>
        </TabsContent>
      </Tabs>
    </div>
  )
}

