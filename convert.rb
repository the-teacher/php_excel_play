# encoding: UTF-8
puts `clear`

require 'rubygems'
require 'cocaine'

line = Cocaine::CommandLine.new("./convert.php", ":input_file :output_file")

begin
  json = line.run(
    input_file:  'excel_import.xlsx',
    output_file: 'out_excel_import.xlsx'
  )
rescue => e
  puts e.message
end

p '~'*80
p json
p '~'*80
